particlesJS("splash01", {
	"particles":{
		"number":{
			"value":30,//この数値を変更すると桜の数が増減できる
			"density":{
				"enable":true,
				"value_area":1121.6780303333778
			}
		},
		"color":{
			"value":"#fff"
		},
		"shape":{
			"type":"image",//形状は画像を指定
			"stroke":{
				"width":0,
			},
			"image":{
				"src":"wp-content/themes/template/img/parts/splash/flower.png",//【重要】画像を指定！桜の画像を設定してください。
				"width":120,
				"height":120
			}
		},
		"opacity":{
			"value":0.06409588744762158,
			"random":true,
			"anim":{
				"enable":false,
				"speed":1,
				"opacity_min":0.1,
				"sync":false
			}
		},
		"size":{
			"value":10,
			"random":true,//サイズをランダムに
			"anim":{
				"enable":false,
				"speed":4,
				"size_min":0.1,
				"sync":false
			}
		},
		"line_linked":{
			"enable":false,
		},
		"move":{
			"enable":true,
			"speed":5,//この数値を小さくするとゆっくりな動きになる
			"direction":"bottom-right",//右下に向かって落ちる
			"random":false,//動きはランダムにしない
			"straight":false,//動きをとどめない
			"out_mode":"out",//画面の外に出るように描写
			"bounce":false,//跳ね返りなし
			"attract":{
				"enable":false,
				"rotateX":281.9177489524316,
				"rotateY":127.670995809726
			}
		}
	},
	"interactivity":{
		"detect_on":"canvas",
		"events":{
			"onhover":{
				"enable":false,
			},
			"onclick":{
				"enable":false,
			},
			"resize":true
		}
	},
	"retina_detect":false
});

//SVGアニメーションの描画
const stroke = new Vivus('mask', { // id指定
    start: 'manual', // 自動再生をせずスタートをマニュアルに
    type: 'scenario-sync', // アニメーションのタイプを設定
    duration: 15, //アニメーションの時間設定。数字が小さくなるほど速い
    forceRender: false, // パスが更新された場合に再レンダリングさせない
    animTimingFunction:Vivus.EASE, // 動きの加速減速設定
}, function() {
    $('#mask').attr('class', 'done'); //描画が終わったらdoneというクラスを追加
});

$(window).on('load',function(){
    $('#splash01').delay(4000).fadeOut('slow');
	$('#splashLogo').delay(4000).fadeOut('slow');
    stroke.play();
});