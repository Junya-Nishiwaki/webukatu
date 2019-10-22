(function() {
'use strict';
// let answer_before = ['仕事に決まってるだろ！<br>', '仕事よりも君が大事さ。<br>'];
// let answer = answer_before[Math.floor(Math.random() * answer_before.length)];
//
// document.write('彼女：仕事と私どっちを取るのよ！<br>');
// document.write(`自分：${answer}`);
//
// if (answer === '仕事に決まってるだろ！<br>') {
//   document.write('彼女：あたたたたたたたっーーー！！<br>');
// } else if (answer === '仕事よりも君が大事さ。<br>') {
//   for (let i = 0; i < 100; i++) {
//     document.write('自分：愛してるよ。<br>');
//   }
//   document.write('彼女：ひぃやぁぁぁーーーーーー！<br>');
// }
// document.write('自分：ひでぶっ！！<br>');
// })();

// function whisperLove(){
//   document.write('愛してるよ。');
// }
// setInterval(whisperLove, 100);

var intervalId = setInterval(function(){
    document.write('愛してるよ。');
  }, 100);

  setTimeout(function(){
    clearInterval(intervalId);
    document.write('<br>');
    document.write('彼女：ひぃやぁぁぁーーーーーー！！<br>');
    document.write('自分：たわばっ！');
  }, 10000);
})();
