private function pre_r($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

private function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    $this->pre_r($_GET);
    echo '<h2>$_POST</h2>';
    $this->pre_r($_POST);
    echo '<h2>$_COOKIE</h2>';
    $this->pre_r($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    $this->pre_r($_SESSION);
}

$this->whatIsHappening(); // call it somewhere, probably run()?