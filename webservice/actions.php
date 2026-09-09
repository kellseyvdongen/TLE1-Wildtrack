<?php
/**
 * @return array
 */
function getAnimals():array {
    return [
        [
            "id" => 1,
            "name" => "Lion",
            "img" => "./images/lion.jpg",
            "date" => "yesterday, 12:00"
        ],
        [
            "id" => 2,
            "name" => "Lioness",
            "img" => "./images/lioness.jpeg",
            "date" => "today, 15:00"
        ],
        [
            "id" => 3,
            "name" => "Tiger",
            "img" => "./images/tiger.jpg",
            "date" => "23-09-2026, 11:00"

        ],
        [
            "id" => 4,
            "name" => "Tigress",
            "img" => "./images/tigress.jpg",
            "date" => "yesterday, 22:00"
        ],
        [
            "id" => 5,
            "name" => "Bear",
            "img" => "./images/bear.webp",
            "date" => "today, 09:00"
        ],
        [
            "id" => 6,
            "name" => "Sow",
            "img" => "./images/sow.jpg",
            "date" => "yesterday, 18:00"
        ],
        [
            "id" => 7,
            "name" => "Bull",
            "img" => "./images/bull.png",
            "date" => "today, 14:00"
        ],
        [
            "id" => 8,
            "name" => "Cow",
            "img" => "./images/cow.jpg",
            "date" => "yesterday, 20:00"
        ]
    ];
}


/**
 * @param $id
 * @return array|false
 */
function getAnimalsDetails($id): array|false
{
    $tags = [
        1 => [
            "img" => "./images/lion.jpg",
            "name" => "Lion",
            "gender" => "male",
            "estimated date of birth" => "may 2015",
            "first observation" => "17-05-2015 in the savannah",
            "status" => "active",
            "remark" => "recognizable by a scar above the right eye",
            "last viewed location" => "savannah",
            "weight" => "190 kg",
            "height at the withers" => "120 cm",
            "coat color" => "golden brown",
            "eye color" => "amber",
            "history of observation 1" => "17-05-2015: first observation in the savannah",
            "history of observation 2" => "20-06-2015: observed hunting in the savannah",
            "history of observation 3" => "15-07-2015: observed resting in the shade of a tree",
            "history of observation 4" => "10-08-2015: observed interacting with other lions in the pride",
            "history of observation 5" => "05-09-2015: observed drinking water at the watering hole",
            "identification" => "scar above the right eye"
        ],
        2 => [
            "name" => "Lioness",
            "gender" => "female",
            "estimated date of birth" => "june 2017",
            "first observation" => "20-06-2017 in the savannah",
            "status" => "active",
            "remark" => "recognizable by a distinctive pattern of spots on her coat",
            "last viewed location" => "savannah",
            "weight" => "130 kg",
            "height at the withers" => "110 cm",
            "coat color" => "golden brown with black spots",
            "eye color" => "green",
            "history of observation 1" => "20-06-2017: first observation in the savannah",
            "history of observation 2" => "20-07-2017: observed hunting in the savannah",
            "history of observation 3" => "15-08-2017: observed resting in the shade of a tree",
            "history of observation 4" => "10-09-2017: observed interacting with other lioness in the pride",
            "history of observation 5" => "05-10-2017: observed drinking water at the watering hole",
            "identification" => "distinctive pattern of spots on her coat"
        ],
        3 => [
            "name" => "Tiger",
            "gender" => "male",
            "estimated date of birth" => "july 2008",
            "first observation" => "02-03-2008 in the jungle",
            "status" => "active",
            "remark" => "recognizable by a distinctive pattern of stripes on his coat",
            "last viewed location" => "jungle",
            "weight" => "220 kg",
            "height at the withers" => "110 cm",
            "coat color" => "orange with black stripes",
            "eye color" => "yellow",
            "history of observation 1" => "19-04-2008: first observation in the jungle",
            "history of observation 2" => "06-05-2008: observed hunting in the jungle",
            "history of observation 3" => "11-06-2008: observed resting in the shade of a tree",
            "history of observation 4" => "14-07-2008: observed interacting with other tigers in the pride",
            "history of observation 5" => "04-08-2008: observed drinking water at the watering hole",
            "identification" => "distinctive pattern of stripes on his coat"
        ],
        4 => [
            "name" => "Tigress",
            "gender" => "female",
            "estimated date of birth" => "august 2009",
            "first observation" => "04-04-2009 in the jungle",
            "status" => "active",
            "remark" => "recognizable by a scar above the left eye",
            "last viewed location" => "jungle",
            "weight" => "180 kg",
            "height at the withers" => "100 cm",
            "coat color" => "orange with black stripes",
            "eye color" => "green",
            "history of observation 1" => "12-05-2009: first observation in the jungle",
            "history of observation 2" => "08-06-2009: observed hunting in the jungle",
            "history of observation 3" => "14-07-2009: observed resting in the shade of a tree",
            "history of observation 4" => "11-08-2009: observed interacting with other tigress in the pride",
            "history of observation 5" => "23-09-2009: observed drinking water at the watering hole",
            "identification" => "scar above the left eye"
            ],
        5 => [
            "name" => "bear",
            "gender" => "male",
            "estimated date of birth" => "march 2011",
            "first observation" => "23-03-2011 in the forest",
            "status" => "active",
            "remark" => "recognizable by a distinctive pattern of fur on his coat",
            "last viewed location" => "forest",
            "weight" => "250 kg",
            "height at the withers" => "130 cm",
            "coat color" => "brown with black patches",
            "eye color" => "brown",
            "history of observation 1" => "03-04-2011: first observation in the forest",
            "history of observation 2" => "11-05-2011: observed hunting in the forest",
            "history of observation 3" => "08-06-2011: observed resting in the shade of a tree",
            "history of observation 4" => "23-07-2011: observed interacting with other bears in the pride",
            "history of observation 5" => "12-08-2011: observed drinking water at the watering hole",
            "identification" => "distinctive pattern of fur on his coat"
        ],
        6 => [
            "name" => "sow",
            "gender" => "female",
            "estimated date of birth" => "april 2016",
            "first observation" => "15-04-2016 in the forest",
            "status" => "active",
            "remark" => "recognizable by a distinctive pattern of fur on her coat",
            "last viewed location" => "forest",
            "weight" => "200 kg",
            "height at the withers" => "120 cm",
            "coat color" => "brown with black patches",
            "eye color" => "brown",
            "history of observation 1" => "11-05-2016: first observation in the forest",
            "history of observation 2" => "16-06-2016: observed hunting in the forest",
            "history of observation 3" => "05-07-2016: observed resting in the shade of a tree",
            "history of observation 4" => "22-08-2016: observed interacting with other sows in the pride",
            "history of observation 5" => "24-09-2016: observed drinking water at the watering hole",
            "identification" => "distinctive pattern of fur on her coat"
            ],
            7 => [
                "name" => "bull",
                "gender" => "male",
                "estimated date of birth" => "may 2014",
                "first observation" => "23-04-2014 in the forest",
                "status" => "active",
                "remark" => "recognizable by a sharp horn on his head",
                "last viewed location" => "forest",
                "weight" => "300 kg",
                "height at the withers" => "150 cm",
                "coat color" => "brown",
                "eye color" => "blue",
                "history of observation 1" => "09-05-2014: first observation in the forest",
                "history of observation 2" => "02-06-2014: observed hunting in the forest",
                "history of observation 3" => "23-07-2014: observed resting in the shade of a tree",
                "history of observation 4" => "11-08-2014: observed interacting with other bulls in the pride",
                "history of observation 5" => "22-09-2014: observed drinking water at the watering hole",
                "identification" => "sharp horn on his head"
            ],
        8 => [
            "name" => "cow",
            "gender" => "female",
            "estimated date of birth" => "june 2019",
            "first observation" => "11-02-2019 in the jungle",
            "status" => "active",
            "remark" => "recognizable by a sharp horn on her head",
            "last viewed location" => "jungle",
            "weight" => "250 kg",
            "height at the withers" => "140 cm",
            "coat color" => "dark brown",
            "eye color" => "green",
            "history of observation 1" => "11-03-2019: first observation in the jungle",
            "history of observation 2" => "21-04-2019: observed hunting in the jungle",
            "history of observation 3" => "23-05-2019: observed resting in the shade of a tree",
            "history of observation 4" => "03-06-2019: observed interacting with other cows in the pride",
            "history of observation 5" => "04-07-2019: observed drinking water at the watering hole",
            "identification" => "sharp horn on his head"
        ]
    ];

    return $tags[$id] ?? false;
}

if (!isset($_GET['id'])) {
    $data = getAnimals();
} else {
    $data = getAnimalsDetails($_GET['id']);
}

header("Content-Type: application/json");
echo $data !== false ? json_encode($data) : json_encode(['error' => 'Not found']);


