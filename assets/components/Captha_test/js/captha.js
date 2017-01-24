function test(time, level, time_limit_1, time_limit_2, time_limit_3) {


	
        document.getElementById('capcha-image_' + level).src = '/capcha_loader_' + level + '.php?rid=' + Math.random();

addRemuveLinckBefore(level);

        var time_limit = time;
        timer(time_limit, level, time_limit_1, time_limit_2, time_limit_3);

        
        
     /*   setTimeout(function () {
            document.getElementById('capcha-image_' + level).src = '/default_image_' + level + '.php?rid=' + Math.random()
        }, time); */
 }
/* изначальный вариант таймера

var timeElem = document.getElementById('time'), 
        countdown = new Date(),
        responseTime = new Date(Date.now() + (1000*10)); // таймер 10 секунд
 
function startTime() {
  countdown.setTime(responseTime - Date.now());
  timeElem.innerHTML = countdown.getUTCMinutes() + ':' + countdown.getUTCSeconds() + ':' + countdown.getUTCMilliseconds();
  if(countdown.getUTCHours() > 0 || countdown.getUTCMinutes() > 0 || countdown.getUTCSeconds() > 0 || countdown.getUTCMilliseconds() > 10) 
  requestAnimationFrame(startTime);
  else
  alert('Готово');
}
requestAnimationFrame(startTime);

*/

function timer(time_limit, level, time_limit_1, time_limit_2, time_limit_3){

	var timeElem = document.getElementById('time'), 
        countdown = new Date(),
        responseTime = new Date(Date.now() + (time_limit)); 
 
function startTime() {
  countdown.setTime(responseTime - Date.now());
  timeElem.innerHTML = countdown.getUTCMinutes() + ':' + countdown.getUTCSeconds();
  if(countdown.getUTCHours() > 0 || countdown.getUTCMinutes() > 0 || countdown.getUTCSeconds() > 0 || countdown.getUTCMilliseconds() > 800) 
  requestAnimationFrame(startTime);
  else
addRemuveLinckAfter(time_limit, level, time_limit_1, time_limit_2, time_limit_3);

  return;
}
requestAnimationFrame(startTime);

return;

}

        
   function add_class(){
   	document.getElementById('test_1').classList.add('test_test');
   }

    function remove_class(){
   	document.getElementById('test_1').classList.remove('test_test');

  /* 	$('#test_1').addClass('test'); */
   }

   function addRemuveLinckBefore(level){

   	var el_n = document.getElementById('linck_'+level);
    el_n.parentNode.removeChild(el_n);
    
    if('linck_'+level != 'linck_1'){
    	var el_1 = document.getElementById('linck_1');
    el_1.removeAttribute('href');
    el_1.removeAttribute('onclick');
    }
    if('linck_'+level != 'linck_2'){
    	var el_2 = document.getElementById('linck_2');
    el_2.removeAttribute('href');
    el_2.removeAttribute('onclick');
    }
    if('linck_'+level != 'linck_3'){
    	var el_3 = document.getElementById('linck_3');
    el_3.removeAttribute('href');
    el_3.removeAttribute('onclick');
    }



    var tt = document.getElementById('eq_div_'+level)
   	var newA = document.createElement('a');
    newA.innerHTML = 'Сброс задачи';
    var att_href = document.createAttribute( "href" );
    var att_id = document.createAttribute('id');
    att_id.value = "reset_custom";
    att_href.value = "/";
    newA.setAttributeNode(att_id);
    newA.setAttributeNode(att_href); 
    tt.insertBefore(newA, tt.firstChild);
   }


function addRemuveLinckAfter(time_limit, level, time_limit_1, time_limit_2, time_limit_3){

	var el_2 = document.getElementById('reset_custom');
    el_2.parentNode.removeChild(el_2);

    var tt = document.getElementById('eq_div_'+level)
   	var newA = document.createElement('a');
    newA.innerHTML = 'Новая задача';
    var att_href = document.createAttribute( "href" );
    var att_id = document.createAttribute('id');
    var att_onclick = document.createAttribute('onclick');
    att_href.value = "javascript:void(0);";
    att_id.value = 'linck_'+level;
    att_onclick.value = 'test('+time_limit+','+ level+','+ time_limit_1+','+ time_limit_2+','+ time_limit_3+')';
    newA.setAttributeNode(att_href); 
    newA.setAttributeNode(att_id);
    newA.setAttributeNode(att_onclick);
    tt.insertBefore(newA, tt.firstChild);


    if('linck_'+level != 'linck_1'){
    	var el_1 = document.getElementById('linck_1');
    var att_href_1 = document.createAttribute( "href" );
    var att_onclick_1 = document.createAttribute('onclick');
    att_href_1.value = "javascript:void(0);";
    att_onclick_1.value = 'test('+time_limit_1+',1,'+time_limit_1+','+ time_limit_2+','+ time_limit_3+')';
    el_1.setAttributeNode(att_href_1);
    el_1.setAttributeNode(att_onclick_1);
    }
    if('linck_'+level != 'linck_2'){
    	var el_2 = document.getElementById('linck_2');
    var att_href_2 = document.createAttribute( "href" );
    var att_onclick_2 = document.createAttribute('onclick');
    att_href_2.value = "javascript:void(0);";
    att_onclick_2.value = 'test('+time_limit_2+',2,'+time_limit_1+','+ time_limit_2+','+ time_limit_3+')';
    el_2.setAttributeNode(att_href_2);
    el_2.setAttributeNode(att_onclick_2);
    }
    if('linck_'+level != 'linck_3'){
    	var el_3 = document.getElementById('linck_3');
    var att_href_3 = document.createAttribute( "href" );
    var att_onclick_3 = document.createAttribute('onclick');
    att_href_3.value = "javascript:void(0);";
    att_onclick_3.value = 'test('+time_limit_3+',3,'+time_limit_1+','+ time_limit_2+','+ time_limit_3+')';
    el_3.setAttributeNode(att_href_3);
    el_3.setAttributeNode(att_onclick_3);
    }


    document.getElementById('capcha-image_' + level).src = '/default_image_' + level + '.php?rid=' + Math.random();

}