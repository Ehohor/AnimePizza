<?php 

function convertContentToAssoc(array $data = []): array
{
    $assoc = [];

    if (!empty($data)) {
        foreach ($data as $row) {
            $assoc[$row['name']] = json_decode($row['body'], associative: true);
        }
    }

    return $assoc;
}
