<div class="titulo">Integração HTML e CSS</div>

<h1>
    <?php 
    echo 'Olá';
    echo '<small>
            Mundo!!
        </small>';
    ?>
</h1>

<?= "<div>Outra forma de me 'Expressar'</div>" ?>
<br>
<div><button><?= "LEGAL"?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10?>;
        background-color: black;
        color: #fff;
        font-weight: bold;
        border-radius: 10px;
    }
</style>