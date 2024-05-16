window.onload = function (){

    const POKEMON_TYPE = {
        'normal': '#A8A77A',    // ノーマル
        'fighting': '#C22E28',  // かくとう
        'flying': '#A98FF3',    // ひこう
        'poison': 'rgb(138 68 136)',    // どく
        'ground': '#E2BF65',    // じめん
        'rock': '#B6A136',      // いわ
        'bug': '#A6B91A',       // むし
        'ghost': '#735797',     // ゴースト
        'steel': '#B7B7CE',     // はがね
        'fire': '#EE8130',      // ほのお
        'water': '#6390F0',     // みず
        'grass': 'rgb(125 202 79);',     // くさ
        'electric': '#F7D02C',  // でんき
        'psychic': '#F95587',   // エスパー
        'ice': '#96D9D6',       // こおり
        'dragon': '#6F35FC',    // ドラゴン
        'dark': '#705746',      // あく
        'fairy': '#D685AD',     // フェアリー
    };

    // クラスが"type"である全ての要素を取得
    const typeElements = document.getElementsByClassName("type_color");

    // 各要素のテキストを取得して出力
    for (let i = 0; i < typeElements.length; i++) {
        const typeName = typeElements[i].textContent.trim();
        const boxElement = document.getElementById("box" + i);
        boxElement.style.backgroundColor = POKEMON_TYPE[typeName];

    }

}
