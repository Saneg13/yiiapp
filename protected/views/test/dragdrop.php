<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 01.11.15
 * Time: 16:05
 */
?>

<!DOCSTYLE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Страница для тестов с renderPartial</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" type="text/css" href="/css/my_css.css" >
    <script src="/js/DragManager.js"></script>
    <script>
        DragManager.onDragCancel = function(dragObject) {
            dragObject.avatar.rollback();
        };

        DragManager.onDragEnd = function(dragObject, dropElem) {
            dragObject.elem.style.display = 'none';
            dropElem.classList.add('friends');
            setTimeout(function() {
                dropElem.classList.remove('friends');
            }, 800);
        };
    </script>
</head>
<body>
<?php
echo CHtml::ajaxButton ("Показать участников",
    CController::createUrl('test/Ajax1'),
    array('update' => '#example'));
?>
<div id="example" style="height:64px">
    <?php $this->renderPartial('_ajaxCont', array('infoList'=>$nullArr)); ?>
</div><br />
<div class="family droppable">Drop-элемент</div>
</body>
<footer>
    <!--<script>
        (function(){
            var dragElementAll = document.querySelectorAll('[class="drag"]'),
                dropElement = document.querySelector('[class="drop"]');

            function stopDefault(event){
                event = event || window.event;
                event.preventDefault ? event.preventDefault() : (event.returnValue = false);
            };

            for(var i=0,j=dragElementAll.length; i<j; i++){
                dragElementAll[i].ondragstart = function (event){
                    event = event || window.event;
                    //Для IE < 10 и старых версий Google Chrome
                    var target = event.target || event.srcElement;
                    if(target.nodeName == 'IMG') event.dataTransfer.setData('Text', target.getAttribute('src'));

                }
            }

            dropElement.ondrop = function(event){
                event = event || window.event;
                stopDefault(event);
                event.cancelBubble = true;
                dropElement.innerHTML = event.dataTransfer.getData('Text');
                alert(event.target.nodeName);/*вывод имени дропающего тега*/
                alert(event.target.className);/*вывод имени дропающего класса*/
            }

            dropElement.ondragenter = function(event){
                stopDefault(event);
            }

            dropElement.ondragover = function(event){
                stopDefault(event);

            }
        })();
    </script>-->
</footer>
</html>