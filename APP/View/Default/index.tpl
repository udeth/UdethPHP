
<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GitCafe</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <style>
    body, html, #main {
      text-align: center;
    }
    #info {
      font: 15px/1.5 'Times', 'Times New Roman';
      font-style: italic;
      display: block;
      padding-top: 38%;
    }
  </style>
</head>
<body>
  <div role="main" id="main">
   <span id="info">
      {foreach from=$data item=item}
        {$item['account']}
      {/foreach}
   </span>
  </div>


</body>
</html>
