<!-- create un file index.php in cui:
è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Nome repo: php-oop-1 -->

<?php

    class Movie {
        //inserite variabili per creazione istanza
        public $titolo;
        public $titolo_originale;
        public $lingua;
        public $lingua_originale;
        public $anno;
        public $voto;

        //inserita funzione construct
        function __construct($_titolo, $_titolo_originale, $_lingua, $_lingua_originale, $_anno, $_voto) {
            $this->titolo = $_titolo;
            $this->titolo_originale = $_titolo_originale;
            $this->lingua = $_lingua;
            $this->lingua_originale = $_lingua_originale;
            $this->anno = $_anno;
            $this->voto = $_voto;
        }

    }

//Interstellar
    $interstellar = new Movie('Interstellar', 'Interstellar', 'it', 'en_us', 2014, 8);
    $interstellar_titolo = $interstellar->titolo;
    $interstellar_titolo_originale = $interstellar->titolo_originale;
    $interstellar_lingua = $interstellar->lingua;
    $interstellar_lingua_originale = $interstellar->lingua_originale;
    $interstellar_anno = $interstellar->anno;
    $interstellar_voto = $interstellar->voto;

    //stampo info film
    echo '<h2>'.'Titolo: '.$interstellar_titolo.'</h2>'.'<h3>'.'Titolo originale: '.$interstellar_titolo_originale.'</h3>'.'<h3>'.'Lingua: '.$interstellar_lingua.'</h3>'.'<h3>'.'Lingua originale: '.$interstellar_lingua_originale.'</h3>'.'<h3>'.'Anno: '.$interstellar_anno.'</h3>'.'<h3>'.'Voto: '.$interstellar_voto.'</h3>';


//Inception
    $inception = new Movie('Inception', 'Inception', 'it', 'en_us', 2010, 8);
    $inception_titolo = $inception->titolo;
    $inception_titolo_originale = $inception->titolo_originale;
    $inception_lingua = $inception->lingua;
    $inception_lingua_originale = $inception->lingua_originale;
    $inception_anno = $inception->anno;
    $inception_voto = $inception->voto;

    //stampo info film
    echo '<h2>'.'Titolo: '.$inception_titolo.'</h2>'.'<h3>'.'Titolo originale: '.$inception_titolo_originale.'</h3>'.'<h3>'.'Lingua: '.$inception_lingua.'</h3>'.'<h3>'.'Lingua originale: '.$inception_lingua_originale.'</h3>'.'<h3>'.'Anno: '.$inception_anno.'</h3>'.'<h3>'.'Voto: '.$inception_voto.'</h3>';

//Memento
    $memento = new Movie('Memento', 'Memento', 'it', 'en_us', 2000, 8);
    $memento_titolo = $memento->titolo;
    $memento_titolo_originale = $memento->titolo_originale;
    $memento_lingua = $memento->lingua;
    $memento_lingua_originale = $memento->lingua_originale;
    $memento_anno = $memento->anno;
    $memento_voto = $memento->voto;

    //stampo info film
    echo '<h2>'.'Titolo: '.$memento_titolo.'</h2>'.'<h3>'.'Titolo originale: '.$memento_titolo_originale.'</h3>'.'<h3>'.'Lingua: '.$memento_lingua.'</h3>'.'<h3>'.'Lingua originale: '.$memento_lingua_originale.'</h3>'.'<h3>'.'Anno: '.$memento_anno.'</h3>'.'<h3>'.'Voto: '.$memento_voto.'</h3>';

//Tenet
    $tenet = new Movie('Tenet', 'Tenet', 'it', 'en_us', 2020, 8);
    $tenet_titolo = $tenet->titolo;
    $tenet_titolo_originale = $tenet->titolo_originale;
    $tenet_lingua = $tenet->lingua;
    $tenet_lingua_originale = $tenet->lingua_originale;
    $tenet_anno = $tenet->anno;
    $tenet_voto = $tenet->voto;

    //stampo info film
    echo '<h2>'.'Titolo: '.$tenet_titolo.'</h2>'.'<h3>'.'Titolo originale: '.$tenet_titolo_originale.'</h3>'.'<h3>'.'Lingua: '.$tenet_lingua.'</h3>'.'<h3>'.'Lingua originale: '.$tenet_lingua_originale.'</h3>'.'<h3>'.'Anno: '.$tenet_anno.'</h3>'.'<h3>'.'Voto: '.$tenet_voto.'</h3>';

?>
