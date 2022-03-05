<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <h1>HomePage</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolor molestias soluta exercitationem facere, consequatur explicabo a beatae sunt voluptatum amet laboriosam ex corrupti nobis voluptatibus aliquam corporis. Vel doloribus quibusdam aut sunt laboriosam nihil debitis assumenda voluptatibus odio vitae deleniti, ut, error itaque nesciunt cumque reiciendis? Asperiores veniam perferendis perspiciatis deleniti impedit hic repudiandae et non voluptas, voluptatem sint, similique suscipit maxime saepe repellendus modi fugiat animi architecto accusantium corrupti fuga. Quaerat ad explicabo eligendi eos odit fugit fugiat accusantium magnam aliquid placeat dicta illo libero, delectus sunt perspiciatis ullam sint ea beatae velit nemo veritatis! Non soluta delectus iusto, maxime eveniet nisi sit nostrum dignissimos. Animi esse fugit doloremque harum nesciunt aut cumque explicabo aspernatur, pariatur, unde qui ab. Alias illum sed, dolores eos nostrum velit. Facilis delectus magni mollitia, voluptas fugit perspiciatis voluptatem tenetur odio fuga voluptatum accusantium minus odit laudantium, voluptates dolorum officiis culpa a architecto aut totam cumque modi aperiam. Rem iure earum nisi veniam ratione aut mollitia, omnis laudantium voluptatum neque sunt a sequi distinctio ex iusto dolores itaque quasi, sapiente non facere. Nisi veritatis sed id rem, aut ipsam, architecto eum, quos hic illo delectus placeat deserunt cupiditate libero voluptatum amet tenetur eveniet odio illum fugit. Dolorem ea vitae voluptatum accusamus aliquam quaerat odio, iure dolore impedit quas tempore, ex animi aut reiciendis sint in illum reprehenderit recusandae minus necessitatibus eaque dolorum delectus consequuntur nihil. Quisquam ipsa fugit, eaque corrupti culpa blanditiis iste, voluptas doloribus sed vel minus nam optio perferendis. Modi, quasi.
    </p>

    <ul>
        <?php foreach($users as $user): ?>
            <li>
                <p><?= $user->name ?> | <em><?= $user->email ?></em></p>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>