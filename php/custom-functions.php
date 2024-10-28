<?php 

function convertDateFormat($inputDate) {
    // Create a DateTime object from the input date
    $dateTime = new DateTime($inputDate);

    // Format the date as "9:00 AM 22 JUN 2024" with trailing zeros for minutes
    $formattedDate = $dateTime->format('g:i A d M Y');

    return $formattedDate;
}

function generateRandomIndex($hexCodes, &$usedIndices)
{
    $count = count($hexCodes);
    $indices = [1, 2, 3]; // Possible indices

    if ($count >= 3) {
        // Remove indices that have been used before
        $availableIndices = array_diff($indices, $usedIndices);

        if (empty($availableIndices)) {
            // If all indices have been used, reset the usedIndices array
            $usedIndices = [];
            $availableIndices = $indices;
        }

        $randomIndex = array_rand($availableIndices);
        $usedIndices[] = $availableIndices[$randomIndex];

        return $hexCodes[$availableIndices[$randomIndex] - 1];
    } else {
        // If the count is less than 3, return the next hex code
        return $hexCodes[$count];
    }
}

$hexCodes = ['#f05a28', '#e6c5dd', '#008960'];
$usedIndices = [];