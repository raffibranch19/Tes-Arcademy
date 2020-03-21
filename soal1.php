<?php
    function getData($nama, $umur){

        class sekolah{
            public $keyname;
            public $year_in;
            public $year_out;
        }

        class kemampuan{
            public $skillname;
            public $level;
        }

        $mysd = new sekolah();
        $mysd->keyname = "SDN KEBALEN 01";
        $mysd->year_in = "2005";
        $mysd->year_out = "2011";

        $mysmp = new sekolah();
        $mysmp->keyname = "SMP NEGERI 3 BABELAN";
        $mysmp->year_in = "2011";
        $mysmp->year_out = "2014";

        $mysmk = new sekolah();
        $mysmk->keyname = "SMK TARUNA BANGSA";
        $mysmk->year_in = "2014";
        $mysmk->year_out = "2017";

        $myK1 = new kemampuan();
        $myK1->skillname = "Python Programming" ;
        $myK1->level = "Beginner";

        $myK2 = new kemampuan();
        $myK2->skillname = "Java Programming" ;
        $myK2->level = "Beginner";

        $sekolahku = array($mysd,$mysmp,$mysmk);
        $kemampuanku = array($myK1, $myK2);

        $name = $nama;
        $age = $umur;
        $address = "KP KEBALEN JATI RT 002 / RW 015 NO.56 , Kebalen - Babelan - Bekasi - Jawa Barat";
        $is_married = false;
        $interest_in_coding = true;
        $hobbies = array("Playing Game", "Watching Movie", "Listening Music");
        $list_school = $sekolahku;
        $skills = $kemampuanku;

        $arr = array(
            "name" => $name,
            "age" => $age,
            "address" => $address,
            "hobbies" => $hobbies,
            "is_maried" => $is_married,
            "list_school" => $list_school,
            "skills" => $skills,
            "interest_in_coding" => $interest_in_coding,
        );

        $vJson = json_encode($arr);

        echo $vJson;
    }

    getData("Mohamad Raffi Abdul Azis",20);
?>