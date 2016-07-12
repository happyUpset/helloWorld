<?php ?>

<!DOCTYPE html>
<html>
<head>
    <script src="vue.js"></script>
    <script>
        window.onload=function(){
            var one = new Vue({
                el:'.tBox'
                ,data:{
                    alert:'hello to everyone'
                    ,shows: [
                        { text: 'Learn JavaScript' },
                        { text: 'Learn Vue.js' },
                        { text: 'Build Something Awesome' }
                    ]
                }
                ,methods:{
                    toEnter:function(){
                        var tempText = this.alert;
                        if(tempText){
                            this.shows.push({text:tempText});
                            this.alert = '';
                        }
                    }
                    ,toRemove:function(index){
                        this.shows.splice(index,1);
                    }
                }
            });
            var three = new Vue({
                el: '#app',
                data: {

                }
            })
            var exampleData = {
                name: 'Vue.js'
            }

            var exampleVM = new Vue({
                el: '#example-1',
                data: exampleData
            })
        }
    </script>
    <style>
        a{
            color:#0075c2;
        }
        a:hover{
            color:#ccc;
        }
        .test{
            background-color: #fed22f;
            height:200px;
            width: 20px;
        }
        .testB{
            background-color: #c683fe;
            height:20px;
            width: 20px;
        }
    </style>
</head>
<body >
<div class="tBox">
    <p>{{alert}}</p>
    <input  v-model="alert" v-on:keyup.enter="toEnter">
    <ul>
        <li v-for="show in shows">
            <span>{{show.text}}</span>
            <button v-on:click="toRemove($index)">XXX</button>
        </li>
    </ul>

</div>
<!-- 这是我们的 View -->
<div id="example-1">
    Hello {{ name }}!
</div>


</body>
</html>
