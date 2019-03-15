# vimeo-entities
A set of PHP entities that represent the Vimeo API responses
Includes Hydrators that populate the entities from the responses

## Usage

```php
# ..

use PFWD\Vimeo\Hydrator\Type\Video;

// Get response
$client->request('/me/videos/', array(), 'GET');
$dataSet = $response['body']['data'];

// Loop over each video in the data set and hydrate a new Video entity
foreach($dataSet as $data) {
    $hydrator = new Video($data);
    $video = $hydrator->getEntity();
}
# ..
```

## TODO
Only Video details are working at the moment

## Install
```
$ composer require "pfwd/vimeo-entities"
```

## Tests
To run tests
```
$ bin/phpstan analyse --level=7 src
```

```
$ bin/codecept run unit
```