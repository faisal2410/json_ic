<?php
$json_data = file_get_contents('cv.json');
// var_dump($json_data);
$cv = json_decode($json_data, true);
// var_dump($cv);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title><?php echo $cv["name"]; ?> -Curriculam Vitae</title>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="content">
        <h1><?php echo $cv['name']; ?></h1>
        <p><?php echo $cv['profile']; ?></p>

        <h2>Contact Information</h2>
        <ul>
            <li>Email: <?= $cv['contact_information']['email']; ?></li>
            <li>Phone: <?php echo $cv['contact_information']['phone']; ?></li>
            <li>Address: <?php echo $cv['contact_information']['address']; ?></li>
            <li>LinkedIn: <a href="<?php echo $cv['contact_information']['linkedin']; ?>"><?php echo $cv['contact_information']['linkedin']; ?></a></li>
            <li>Website: <a href="<?php echo $cv['contact_information']['website']; ?>"><?php echo $cv['contact_information']['website']; ?></a></li>
        </ul>

        <h2>Skills</h2>
        <ul>
            <?php foreach ($cv['skills'] as $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Experience</h2>
        <?php foreach ($cv['experience'] as $job): ?>
            <h3><?php echo $job['position']; ?> at <?php echo $job['company']; ?> (<?php echo $job['duration']; ?>)</h3>
            <p><?php echo $job['location']; ?></p>
            <ul>
                <?php foreach ($job['responsibilities'] as $responsibility): ?>
                    <li><?php echo $responsibility; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>

        <h2>Education</h2>
        <?php foreach ($cv['education'] as $education): ?>
            <h3><?php echo $education['degree']; ?> - <?php echo $education['institution']; ?></h3>
            <p>Graduated in <?php echo $education['graduation_year']; ?></p>
        <?php endforeach; ?>


        <h2>Certifications</h2>
        <ul>
            <?php foreach ($cv['certifications'] as $certification): ?>
                <li><?php echo $certification['name']; ?> (<?php echo $certification['issue_date']; ?>) - <?php echo $certification['issuing_organization']; ?></li>
            <?php endforeach; ?>
        </ul>
        <h2>Languages</h2>
        <ul>
            <?php foreach ($cv['languages'] as $language): ?>

                <li><?= $language; ?></li>
            <?php endforeach; ?>
        </ul>


        <h2>Projects</h2>
        <?php foreach ($cv['projects'] as $project): ?>
            <h3><?php echo $project['name']; ?></h3>
            <p><?php echo $project['description']; ?></p>
            <p><strong>Technologies used:</strong> <?php echo implode(', ', $project['technologies']); ?></p>
        <?php endforeach; ?>

        <h2>References</h2>
        <ul>
            <?php foreach ($cv['references'] as $reference): ?>
                <li><?php echo $reference['name']; ?> - <?php echo $reference['position']; ?>, Contact: <?php echo $reference['email']; ?>, <?php echo $reference['phone']; ?></li>
            <?php endforeach; ?>
        </ul>

    </div>



    <?php include 'footer.php' ?>

</body>

</html>