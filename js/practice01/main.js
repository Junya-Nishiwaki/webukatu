window.addEventListener('DOMContentLoaded', function() {

  // テキストエリアのDOMを取得
  var node = document.querySelector('#count-text');

  node.addEventListener('keyup', function() {

    // テキストの中身を取得し、その文字数を数える
    var count = this.value.length;

    // カウンターを表示する箇所のDOMを取得する
    var counterNode = document.querySelector('.show-count-text');

    // innerTEXTを使うと取得したDOMの中身のテキストを書き換えられる
    counterNode.innerText = count;
  }, false);
}, false);
