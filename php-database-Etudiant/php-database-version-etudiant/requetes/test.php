
// yo

function afficherArticleAvecCategorie(array $tableArticle, array $tableCategorie, string $entrer) : array{
    $reponse = [];
    foreach ($tableCategorie as $cle=>$arrayCategorie){
        foreach ($arrayCategorie as $Categorie){
            if ($Categorie == $entrer){
                $stock=$cle;
            }
        }
    }
    foreach ($tableArticle as $cleA=>$Article){
        foreach ($Article as $Libeller=>$description){
            foreach ($description as $k){
                $chara = " $k | ";
                $reponse[]=$chara;
            }
        }
    }
    return $reponse;
}