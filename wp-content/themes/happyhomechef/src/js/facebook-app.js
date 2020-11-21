/* eslint-disable no-console */
/* eslint-disable no-undef */
export default class FacebookApp {
    constructor( $ ) {
        this.init( $ );
    }
    // init( $ ) {
    //     $.ajaxSetup( { cache: true } );
    //     $.getScript( 'https://connect.facebook.net/en_US/sdk.js', () => {
    //         FB.init( {
    //             appId: '403490087355999',
    //             version: 'v9.0',
    //         } );
    //         // FB.getLoginStatus( updateStatusCallback );
    //         this.getPosts();
    //     } );

    //     function updateStatusCallback() {
    //         fetch( 'https://graph.facebook.com/v9.0/me?fields=id,name&access_token=EAALKSb6Q3XgBABswJwZAsLzKrvtkQEVb3EWZBX48rKZA4UX8uDUQFvf4ysL1PZAvNgKH9BIB36IKvRXBejgsTy2D0qxR9Iz1suxmsL219dGwZBqZBceJ6qHbeG6EsU1uNekJaoXLsrc8B4NrMKy1mZA0oADLQYmShhvEDSx9wzujMCaL9ReeUHkZBZANFkar5cTwZD' )
    //             .then( ( response ) => response.json() )
    //             .then( ( data ) => console.log( data ) );
    //     }
    // }
    getPosts() {
        fetch( 'https://graph.facebook.com/v9.0/me?fields=id,name,feed.limit(3){name,full_picture,description}&access_token=EAAFuZBNtTxl8BACK55XKVi09wZBbMzq8FqmVOoydfIpOWVc254mxSSDaDN0XBey7WuT6xPjWitZAPeKR9IXnvzm15EORrlyLArDZChM456BiaZCBKth3VHgyLZCZBfBdGI1StUkhGV01cWy7Ms4Tc2Mthzq54LAoUfWW7llGYtTYJsFvTCxsZCVNGIbFcilDKlqqnLKtoKyMW7MhL0hZCIQf2k9MN5VGuURmIzPHOoNuQxgZDZD' )
            .then( ( response ) => response.json() )
            .then( ( data ) => console.log( data ) );
    }
}
