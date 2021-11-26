<table class="table table-hover" id="mytable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Verb One</th>
            <th scope="col">Verb Two</th>
            <th scope="col">Verb Three</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($irregular as $d) : ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $d['verb_one'] ?></td>
                <td><?= $d['verb_two'] ?></td>
                <td><?= $d['verb_three'] ?></td>
            </tr>
        <?php $i++;
        endforeach ?>
    </tbody>
</table>