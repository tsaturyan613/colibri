@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')

    <h3 class="h3">Թողեք Ձեր կարծիքը</h3>
    <div class="page">
        <div class="opinion-title-parent">
            <?php
            //////////////////////////////////////////////////////////////////////////TITLE3////////////////////////////////////////////////////////////////////////////////////////
            if ($questions[0]['checked']=="on") {
                echo "<h5 class='subtitle  subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[0]['question'])."<span class='error1'>Պարտադիր է լրացման</span></h5>";
            }else{
                echo "<h5 class='subtitle  subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[0]['question'])."։</h5>";
            }
            ?>
        </div>
        <form action="" method="post">
            <?php
            ///////////////////////////////////////////////////////////////////////ANSWER3////////////////////////////////////////////////////////////////////////////////////////////////
            $id=$questions[0]['id'];
//            $answer = $model->get_answer_no($id);
            foreach ($answer_1 as  $val) {
                if ($val['type']=='input') {
                    echo "<input type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id=".$val['id']." name='inp'>";
                }
                else{
                    echo "<p><input type=".$val['type']." class='radio' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
                }
            }
            ?>

            <p><input type="radio" class="other" id="22" name="inp"><label for="22"><span class=span>Այլ</span></label> </p>
            <div class=" letterscount arr1"><input class=" arr ar1  form-control shadow-none" id="arr1" placeholder="Մուտքագրեք տեքստը" maxlength="50"></input><span class="count count1" id="count1" ><span>0</span>/50</span></div>
        </form>

        <!-- <h5 class="subtitle" data-id='4' style="margin-top: 67px; font-size: 17px; margin-bottom: 19px;">4․ Ծրագրավորման ի՞նչ հավելյալ լեզու կցանկանայիք տեսնել մեր դասավանդվող լեզուների ցանկում։</h5> -->
        <?php
        //////////////////////////////////////////////////////////////////////////TITLE4////////////////////////////////////////////////////////////////////////////////////////
        if ($questions[1]['checked']=="on") {
            echo "<h5 class='subtitle  subtitle2'  style='position: relative; display: block; margin-top: 67px; font-size: 17px; margin-bottom: 19px;'>".utf8_decode($questions[1]['question'])."<span class='error2'>Պարտադիր է լրացման</span></h5>";
        }else{
            echo "<h5 class='subtitle  subtitle2'  style='position: relative; display: block; margin-top: 67px; font-size: 17px; margin-bottom: 19px;'>".utf8_decode($questions[1]['question'])."։</h5>";
        }
        ?>

        <form action="" method="post">
            <!-- <div class=" letterscount"><input class="arr ar2 form-control shadow-none " id="arr2" placeholder="Մուտքագրեք տեքստը" maxlength="50"></input> <span class="count" id="count2"><span >0</span>/50</span></div> -->

            <?php
            ///////////////////////////////////////////////////////////////////////ANSWER4////////////////////////////////////////////////////////////////////////////////////////////////
            $id=$questions[1]['id'];
//            $answer = $model->get_answer_no($id);
            foreach ($answer_2 as  $val) {
                if ($val['type']=='input') {
                    echo "<div class='letterscount'><input type=".$val['type']." class='arr ar2 form-control shadow-none ' id='arr2' placeholder='Մուտքագրեք տեքստը' maxlength='50'></input> <span class='count' id='count2'><span >0</span>/50</span></div>";
                    // echo "<input type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id=".$val['id']." name='inp'>";
                }else{
                    echo "<p><input type=".$val['type']." class='radio' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
                }
            }
            ?>
        </form>

        <!-- <h5 class="subtitle" data-id='5' style="margin-top: 67px;  margin-bottom: 19px;">5․ Ի՞նչ առաջարկներ ունեք։</h5> -->

        <?php
        //////////////////////////////////////////////////////////////////////////TITLE5////////////////////////////////////////////////////////////////////////////////////////
        if ($questions[2]['checked']=="on") {
            echo "<h5 class='subtitle  subtitle3'  style='position: relative; display: block; margin-top: 67px; font-size: 17px; margin-bottom: 19px;'>".$questions[2]['question']."<span>*</span> ։<span class='error3'>Պարտադիր է լրացման</span></h5>";
        }else{
            echo "<h5 class='subtitle  subtitle3'  style='position: relative; display: block; margin-top: 67px; font-size: 17px; margin-bottom: 19px;'>".$questions[2]['question']."։</h5>";
        }
        ?>
        <form action="" method="post">
        <?php
        ///////////////////////////////////////////////////////////////////////ANSWER5////////////////////////////////////////////////////////////////////////////////////////////////
        $id=$questions[2]['id'];
        foreach ($answer_3 as  $val) {
            if ($val['type']=='input') {
                echo "<div class='letterscount'><input type=".$val['type']." class='arr ar3 form-control shadow-none ' id='arr3' placeholder='Մուտքագրեք տեքստը' maxlength='50'></input> <span class='count' id='count3'><span >0</span>/50</span></div>";
        // echo "<input type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id=".$val['id']." name='inp'>";
            }else{
                echo "<p><input type=".$val['type']." class='radio' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }
        }
        ?>
        <!-- <div class=" letterscount"><input class="arr ar3 form-control shadow-none " id="arr3" placeholder="Մուտքագրեք տեքստը" maxlength="50"></input> <span class="count" id="count3"><span>0</span>/50</span></div> -->
        </form>

        <div class="next-opinion"><button class="btn-primary go-finish">ԱՎԱՐՏԵԼ</button></div>
        <div class="previous" style="position: relative;" ><a style="position: absolute; left: 0; top: -29px; text-decoration: none;" href="/opinion" ><svg style="margin-bottom: 3px; " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                </svg>ՆԱԽՈՐԴ ԷՋ</div></a>
{{--        <div class="numbers">--}}
{{--            <span>1</span>--}}
{{--            <span class="span1">2</span>--}}
{{--        </div>--}}
    </div>
    <script src="{{asset('js/opinion2.js')}}"></script>

@endsection
