import path from 'path'
import webpack from 'webpack'
import MiniCssExtractPlugin from 'mini-css-extract-plugin'
import UglifyJsPlugin from 'uglifyjs-webpack-plugin'
import OptimizeCSSAssetsPlugin from 'optimize-css-assets-webpack-plugin'
import CleanWebpackPlugin from 'clean-webpack-plugin'

// Detecting Dev Mode
const devMode = process.env.NODE_ENV !== 'production'

// BrowserSync in Webpack
let browserSyncFile = [];
if (devMode) {
	try {
		browserSyncFile = require('./browser-sync');
		// do stuff
	} catch (err) {
		console.log(`There is an error: ${err}`);
	}

	if ( typeof browserSyncFile.browserSync === 'undefined' ) {
		try {
			browserSyncFile = require('./browser-sync-sample');
			// do stuff
		} catch (err) {
			console.log(`There is an error: ${err}`);
		}
	}
}

// Extract text from a bundle, or bundles, into a separate file
const cssPlugin = new MiniCssExtractPlugin({
	filename: devMode ? './css/[name].css' : './css/[name].min.css'
})

// Keeping it clean and fresh
const cleanPlugin = new CleanWebpackPlugin(['dist'])

// Minify JS
const uglifyPlugin = new UglifyJsPlugin({
    uglifyOptions: {
        sourceMap: true,
        warnings: false,
        output: {
        comments: false
        },
        ie8: false
    }
})

// Minify CSS
const optimizeCssPlugin = new OptimizeCSSAssetsPlugin({
    cssProcessorPluginOptions: {
        preset: ['default', { 
        discardComments: {
            removeAll: true
        } 
        }]
    }
})

// Added Jquery declaration into Webpack
const jquery = new webpack.ProvidePlugin({
	$: 'jquery',
	jQuery: 'jquery',
	'window.jQuery': 'jquery'
})

export default {
	mode: devMode ? 'development' : 'production',
	devtool: 'source-map',
	entry: {
		main: [
			'./src/js/scripts.js',
			'./src/sass/styles.scss'
		]
	},
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: devMode ? './js/[name].js' : './js/[name].min.js'
	},
	module: {
		rules: [{
			test: /\.js$/,
			exclude: /node_modules/,
			loader: 'babel-loader'
		}, {
			test: /\.(sa|sc|c)ss$/,
			loader: [
				MiniCssExtractPlugin.loader,
				'css-loader',
				'postcss-loader',
				'sass-loader'
			]
		}, {
			test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
			use: [
				{
					loader: 'file-loader',
					options: {
						name: '[name].[ext]',
						outputPath: 'fonts/',
						publicPath: '../fonts'
					}
				}
			]
		}, {
			test: /\.(jpe?g|png|gif|svg|ico)$/i,
			use: [
				{
				loader: 'file-loader',
				options: {
					name: '[name].[ext]',
					outputPath: 'images/',
					publicPath: '../images'
				}
			}, {
				loader: 'image-webpack-loader',
				options: {
					mozjpeg: {
						progressive: true,
						quality: 65
					},
					optipng: {
						enabled: false,
					},
					pngquant: {
						quality: '65-90'
					},
					gifsicle: {
						interlaced: false,
					}
				}
			}]
		}]
	},
	externals: {
		jquery: 'jQuery'
	},
    optimization: {
        minimizer: [ uglifyPlugin, optimizeCssPlugin ]
    },
	plugins: [ 
        cleanPlugin,
		cssPlugin,
		jquery,
        ...(typeof browserSyncFile.browserSync !== 'undefined' ? [ browserSyncFile.browserSync ] : browserSyncFile)
    ]
}