<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidUser $orcidUser
 */
?>
<div class="orcidUsers index">
	<h2><?php echo $this->fetch('title'); ?></h2>
	<p>Find a user by username or ORCID ID.</p>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<td colspan="7" class="searchbar">
			<?php
			echo $this->Form->create(false, array('type' => 'get'));
			echo $this->Form->input('s', array('div' => false, 'label' => false, 'options' => $findTypes, 'value' => $this->request->getQuery('s')));
			echo $this->Form->input('q', array('div' => false, 'label' => false, 'value' => $this->request->getQuery('q')));
			echo $this->Form->input('g', array('div' => false, 'label' => 'within Group', 'empty' => '', 'options' => $orcidBatchGroups, 'value' => $this->request->getQuery('g')));
			echo $this->Form->submit('Search', array('div' => false));
			echo $this->Form->end();
			?>
		</td>
	</tr>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 40%;
  padding: 10px;
  height: 36px; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Find a user by username or ORCID ID</h2>

<div class="row">
  <div class="column" style="width: 11%;">
   <form action="/action_page.php">
  <label for="contain"></label>
  <select name="contain" id="contain">
  	<option value="containing">Containing</option>
    <option value="start">Starting With</option>
    <option value="end">Ending With</option>
    <option value="match">Matching Exactly</option>
  </select>
  <br><br>
</form>
  </div>
  <div class="column" style="background-color:white;">
    <form action="/action_page1.php" method="get">
  <label for="browser"></label>
  <input list="browsers" name="browser" id="browser">
  <datalist id="browsers">
    <option value="Edge">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
  <input type="submit">
</form>
  </div>
</div>
    <form action="/action_page1.php" method="get">
  <label for="browser"></label>
  <input list="browsers" name="browser" id="browser">
  <datalist id="browsers">
    <option value="Edge">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
  <input type="submit">
</form>

</body>
</html>
