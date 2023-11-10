<?php 
    require_once("includes/header.php");
    require_once("includes/navigation.php");


    if(isset($_GET['homepage']))
    {
        require_once("includes/homepage.php");
    }else if(isset($_GET['addElectionPage']))
    {
        require_once("includes/add_elections.php");
    }else if(isset($_GET['addCandidatePage']))
    {
        require_once("includes/add_candidates.php");
    }

?>


<?php 
    require_once("includes/footer.php");
?>