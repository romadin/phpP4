{"changed":true,"filter":false,"title":"invoegen.php","tooltip":"/invoegen.php","value":"<?php\ninclude_once'dbconnection.php';\n\n$query = \"SELECT comment, titel from comment WHERE stageId='\".$stage.\"'\";\n$result = mysqli_query($connection,$query);\n while($row = $result->fetch_assoc()) {\n\n    }\n?>\n<center>\n    <body>\n        <form action=\"\" method=\"get\">\nStage Name: <input type=\"text\" name=\"fname\"><br>\n        </form>\n    </body>\n    \n</center>","undoManager":{"mark":-32,"position":100,"stack":[[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["u"],"id":31}],[{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["c"],"id":32}],[{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["e"],"id":33}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":7},"action":"remove","lines":["incluce"],"id":34},{"start":{"row":1,"column":0},"end":{"row":1,"column":31},"action":"insert","lines":["include_once'dbconnection.php';"]}],[{"start":{"row":1,"column":31},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":35}],[{"start":{"row":6,"column":0},"end":{"row":7,"column":21},"action":"remove","lines":["  echo $row['comment'];","  echo $row['titel'];"],"id":36}],[{"start":{"row":8,"column":2},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":37}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":["<"],"id":38}],[{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"insert","lines":["c"],"id":39}],[{"start":{"row":9,"column":2},"end":{"row":9,"column":3},"action":"insert","lines":["e"],"id":40}],[{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"insert","lines":["n"],"id":41}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["t"],"id":42}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["e"],"id":43}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":["r"],"id":44}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":17},"action":"insert","lines":["></center>"],"id":45}],[{"start":{"row":9,"column":8},"end":{"row":11,"column":0},"action":"insert","lines":["","    ",""],"id":46}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":47},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"insert","lines":["<"],"id":48}],[{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"insert","lines":["b"],"id":49}],[{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":["o"],"id":50}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"insert","lines":["d"],"id":51}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["y"],"id":52}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":17},"action":"insert","lines":["></body>"],"id":53}],[{"start":{"row":10,"column":10},"end":{"row":12,"column":4},"action":"insert","lines":["","        ","    "],"id":54}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["<"],"id":55}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["f"],"id":56}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["o"],"id":57}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["m"],"id":58}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"remove","lines":["m"],"id":59}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["r"],"id":60}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["m"],"id":61}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":[" "],"id":62}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["a"],"id":63}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["c"],"id":64}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["t"],"id":65}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["i"],"id":66}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["o"],"id":67}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["n"],"id":68}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["-"],"id":69}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"remove","lines":["-"],"id":70}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["="],"id":71}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":[" "],"id":72}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"remove","lines":[" "],"id":73}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":[":"],"id":74}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":[":"],"id":75}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":[" "],"id":76}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"remove","lines":[" "],"id":77}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":[":"],"id":78}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"remove","lines":[":"],"id":79}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":23},"action":"insert","lines":["\"\""],"id":80}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":[" "],"id":81}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"remove","lines":[" "],"id":82}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":[";"],"id":83}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"remove","lines":[";"],"id":84}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":[" "],"id":85}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["m"],"id":86}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["e"],"id":87}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["g"],"id":88}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":["g"],"id":89}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["t"],"id":90}],[{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["h"],"id":91}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["o"],"id":92}],[{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["d"],"id":93}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["="],"id":94}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"remove","lines":["="],"id":95}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["="],"id":96}],[{"start":{"row":11,"column":31},"end":{"row":11,"column":33},"action":"insert","lines":["\"\""],"id":97}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["g"],"id":98}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["e"],"id":99}],[{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["t"],"id":100}],[{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"remove","lines":["t"],"id":101}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"remove","lines":["e"],"id":102}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"remove","lines":["g"],"id":103}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["g"],"id":104}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["e"],"id":105}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["t"],"id":106}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":44},"action":"insert","lines":["></form>"],"id":107}],[{"start":{"row":11,"column":37},"end":{"row":13,"column":8},"action":"insert","lines":["","            ","        "],"id":108}],[{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["<"],"id":109}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":13},"action":"remove","lines":["            <"],"id":110}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":48},"action":"insert","lines":["First name: <input type=\"text\" name=\"fname\"><br>"],"id":111}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"remove","lines":["e"],"id":112}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"remove","lines":["m"],"id":113}],[{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"remove","lines":["a"],"id":114}],[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"remove","lines":["n"],"id":115}],[{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"remove","lines":[" "],"id":116}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["t"],"id":117}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"remove","lines":["s"],"id":118}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"remove","lines":["r"],"id":119}],[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"remove","lines":["i"],"id":120}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"remove","lines":["F"],"id":121}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":["S"],"id":122}],[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["t"],"id":123}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":["a"],"id":124}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":["g"],"id":125}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["e"],"id":126}],[{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":[" "],"id":127}],[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["N"],"id":128}],[{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"insert","lines":["a"],"id":129}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"insert","lines":["m"],"id":130}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["e"],"id":131}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":0},"end":{"row":12,"column":10},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1465893358058}