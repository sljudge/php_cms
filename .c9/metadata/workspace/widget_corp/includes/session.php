{"filter":false,"title":"session.php","tooltip":"/widget_corp/includes/session.php","undoManager":{"mark":98,"position":98,"stack":[[{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["a"],"id":137}],[{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["g"],"id":138}],[{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["e"],"id":139}],[{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"insert","lines":[" "],"id":140}],[{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"insert","lines":["a"],"id":141}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"insert","lines":["g"],"id":142}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"remove","lines":["g"],"id":143}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"insert","lines":["f"],"id":144}],[{"start":{"row":10,"column":28},"end":{"row":10,"column":29},"action":"insert","lines":["e"],"id":145}],[{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"insert","lines":["t"],"id":146}],[{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"remove","lines":["t"],"id":147}],[{"start":{"row":10,"column":28},"end":{"row":10,"column":29},"action":"remove","lines":["e"],"id":148}],[{"start":{"row":10,"column":28},"end":{"row":10,"column":29},"action":"insert","lines":["t"],"id":149}],[{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"insert","lines":["e"],"id":150}],[{"start":{"row":10,"column":30},"end":{"row":10,"column":31},"action":"insert","lines":["r"],"id":151}],[{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"insert","lines":[" "],"id":152}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"insert","lines":["u"],"id":153}],[{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["s"],"id":154}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["e"],"id":155}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":15},"action":"insert","lines":["// "],"id":156}],[{"start":{"row":17,"column":4},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":157},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":31,"column":4},"action":"insert","lines":["function message(){","        if (isset($_SESSION[\"message\"])) {","            $output .=  \"<div class=\\\"message\\\">\";","            $output .=  htmlentities($_SESSION[\"message\"]);","            $output .= \"</div>\";","            ","            // Clear message after use","            $_SESSION[\"message\"] = null;","            ","            return $output;","            ","        }    ","    }","    "],"id":158}],[{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"remove","lines":["e"],"id":159}],[{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"remove","lines":["g"],"id":160}],[{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"remove","lines":["a"],"id":161}],[{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"remove","lines":["s"],"id":162}],[{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"remove","lines":["s"],"id":163}],[{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"remove","lines":["e"],"id":164}],[{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"remove","lines":["m"],"id":165}],[{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"insert","lines":["e"],"id":166}],[{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"insert","lines":["r"],"id":167}],[{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"insert","lines":["r"],"id":168}],[{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"insert","lines":["o"],"id":169}],[{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":["r"],"id":170}],[{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["s"],"id":171}],[{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"remove","lines":["e"],"id":172}],[{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"remove","lines":["g"],"id":173}],[{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"remove","lines":["a"],"id":174}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["s"],"id":175}],[{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"remove","lines":["s"],"id":176}],[{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"remove","lines":["e"],"id":177}],[{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"remove","lines":["m"],"id":178}],[{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"insert","lines":["e"],"id":179}],[{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"insert","lines":["r"],"id":180}],[{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"insert","lines":["r"],"id":181}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["r"],"id":182}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["r"],"id":183}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["o"],"id":184}],[{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["r"],"id":185}],[{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["s"],"id":186}],[{"start":{"row":20,"column":12},"end":{"row":22,"column":32},"action":"remove","lines":["$output .=  \"<div class=\\\"message\\\">\";","            $output .=  htmlentities($_SESSION[\"message\"]);","            $output .= \"</div>\";"],"id":187}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"insert","lines":["$"],"id":188}],[{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"insert","lines":["e"],"id":189}],[{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"insert","lines":["r"],"id":190}],[{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"insert","lines":["r"],"id":191}],[{"start":{"row":20,"column":16},"end":{"row":20,"column":17},"action":"insert","lines":["o"],"id":192}],[{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"insert","lines":["r"],"id":193}],[{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["s"],"id":194}],[{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"insert","lines":[" "],"id":195}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["="],"id":196}],[{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":[" "],"id":197}],[{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["$"],"id":198}],[{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["_"],"id":199}],[{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"insert","lines":["S"],"id":200}],[{"start":{"row":20,"column":22},"end":{"row":20,"column":25},"action":"remove","lines":["$_S"],"id":201},{"start":{"row":20,"column":22},"end":{"row":20,"column":31},"action":"insert","lines":["$_SESSION"]}],[{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":[" "],"id":202}],[{"start":{"row":20,"column":32},"end":{"row":20,"column":34},"action":"insert","lines":["[]"],"id":203}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":35},"action":"insert","lines":["\"\""],"id":204}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["e"],"id":205}],[{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["r"],"id":206}],[{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["r"],"id":207}],[{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"insert","lines":["o"],"id":208}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["r"],"id":209}],[{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["s"],"id":210}],[{"start":{"row":20,"column":42},"end":{"row":20,"column":43},"action":"insert","lines":[";"],"id":211}],[{"start":{"row":25,"column":25},"end":{"row":25,"column":26},"action":"remove","lines":["t"],"id":212}],[{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"remove","lines":["u"],"id":213}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"remove","lines":["p"],"id":214}],[{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"remove","lines":["t"],"id":215}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"remove","lines":["u"],"id":216}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":["o"],"id":217}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["e"],"id":218}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":["r"],"id":219}],[{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"insert","lines":["r"],"id":220}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"insert","lines":["o"],"id":221},{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"insert","lines":["r"]}],[{"start":{"row":25,"column":25},"end":{"row":25,"column":26},"action":"insert","lines":["s"],"id":222}],[{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"remove","lines":["e"],"id":223}],[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"remove","lines":["g"],"id":224}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"remove","lines":["a"],"id":225}],[{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"remove","lines":["s"],"id":226}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"remove","lines":["s"],"id":227}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"remove","lines":["e"],"id":228}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"remove","lines":["m"],"id":229}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["e"],"id":230}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"insert","lines":["r"],"id":231}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":["r"],"id":232}],[{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"insert","lines":["o"],"id":233}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["r"],"id":234}],[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["s"],"id":235}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":12},"action":"remove","lines":["    "],"id":237}],[{"start":{"row":23,"column":29},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":236},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]}]]},"ace":{"folds":[],"scrolltop":53.5,"scrollleft":0,"selection":{"start":{"row":23,"column":29},"end":{"row":23,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1497429029588,"hash":"f55b4c805d3923cb220da8244508c537ce8246ca"}