<?php
//GraphQL test
$query = <<<'JSON'
query {
	search(type: REPOSITORY, query: "topic:textpattern-plugin", first: 50) {
    edges{
      node {
        ... on Repository {
          name
          url
          description
          stargazers {
            totalCount
          }
        }
      }
    }
  }
}
JSON;
$variables = '';

$json = json_encode(['query' => $query, 'variables' => $variables]);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/graphql');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
curl_setopt($curl, CURLOPT_HTTPHEADER,
     array(
            'User-Agent: Textpattern CMS',
            'Content-Type: application/json;charset=utf-8',
            'Authorization: bearer 68ded6a5d378171645968eae8a2987fa0b8adf6d'
        )
    );

$response = curl_exec($curl);

if (curl_error($curl)) {
    // Do nothing.
} else {
    echo $response;

    foreach ($response->data->search->edges->node as $topicElement) {
        echo '<div><h3><a href="'.$topicElement->url.'">'.htmlspecialchars($topicElement->name).'</a></h3></div>';
    }
}

curl_close($curl);
