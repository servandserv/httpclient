# httpclient
## HTTP Client port implementation
1. From client
a) Receive http requests from client(xml|json|application/x-www-form-urlencoded)
b) Translate them into data adaptors (\com\servandserv\data\DataAdaptor interface)

2. To Client
a) Get data adaptor and translate it into xml/json data

## Example
```
$conf = [
    "POST" => [
        "request" => [
            "representation" => [
                [ "application/xml" ],
                [ "application/json" ]
            ]// discribe acceptable request media types
        ],// leave empty if you ready to get only application/x-www-form-urlencoded requests
        "response" => [
            [ "code" => 204, NULL ],
            [ "code" => 500, "application/xml" ],
            [ "code" => 500, "application/json" ]
        ]//describe response types
    ]// GET if port going to receive only get requests
];

$port = \com\servandserv\httpclient\ClientAdaptor::create( $conf );
// get request data adaptor
$adaptor = new ......(); // any TDO with \com\servandserv\data\DataAdaptor interface
$req = $port->request( $adaptor );
...
use data in application
...
$port->response( $resp ); // response data adaptor - any TDO with \com\servandserv\data\DataAdaptor interface
```
