BMX.Percentage=(function(){var d=$("#percentSlider"),b=null,c=false,i=1,a=100;function f(m){if(!m){return[]}var l=a/m,j=[];for(var k=0;k<m-1;k+=1){if(k%2){j.push(Math.round(l*(k+1)+2*Math.random()))}else{j.push(Math.round(l*(k+1)-2*Math.random()))}}console.log(j);return j}function h(k){var m=b.find(".item"),l=0,j=false;m.each(function(n,o){if(n===0){l=k[n]}else{if(n===m.length-1){l=a-k[n-1]}else{l=k[n]-k[n-1]}}$(o).find(".percent").html(Math.round(l)+"%")})}function e(k,l){var j=d.slider("values"),m=g(l);if(m===null){h(j)}else{d.slider("destroy");d.slider({values:m,slide:e,stop:e,min:i,max:a-1});h(m);return false}}function g(l){var k=true,j=d.slider("values"),m=-1;if(j.length<2){return null}d.find("a").each(function(n,o){if($(l.handle).equals($(o))){m=n}});if(m===0){if(j[m]>=j[m+1]){j[m]=j[m+1]-1;k=false}}else{if(m===j.length-1){if(j[m]<=j[m-1]){j[m]=j[m-1]+1;k=false}}else{if(j[m]>=j[m+1]){j[m]=j[m+1]-1;k=false}else{if(j[m]<=j[m-1]){j[m]=j[m-1]+1;k=false}}}}if(k){return null}else{return j}}return{init:function(j){b=j;if(c){d.slider("destroy");c=false}},render:function(){var k=b.find(".item"),j=[];if(k.length===1){d.parent().hide();if(c){d.slider("destroy");c=false}return}d.parent().show();j=f(k.length);if(c){d.slider("destroy")}d.slider({values:j,slide:e,stop:e,min:i,max:a-1});h(j);c=true}}})();