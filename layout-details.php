<?php include_once('includes/head.inc.php'); ?>
<?php include_once('includes/header.inc.php'); ?>
<section class="services-bread">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-md-0">
    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
    <li class="breadcrumb-item active" aria-current="page">Layout Details</li>
  </ol>
</nav>
<div class="services-heading">
    <h5>LAYOUT PLAN VIEWER</h5>
</div>
</section>
<?php include_once('includes/bar.php'); ?>
<section class="alphabet-search-section mt-md-2">
<form method="post">
    <div class="alpha-head ">
        <div class="row ">
            <div class="col-md-6 mt-md-2">
                <p class="p-md-0 m-md-0 ">Select Layout</p>
            </div>
            <div class="col-md-6 mt-md-2">
                <select name="village" id="village" class="v-dropdown pr-md-3 pl-md-3">
                        <option value="--">-------</option>
                        <option value="vellanur">Vellanur</option>
                        <option value="morai">Morai</option>
                </select>
            </div>
        </div>
    </div>
    <div class="alpha-body mt-md-2">
        <div class="row search-content p-md-1">
            <div class="col-md-2">
                <p class="p-md-0 m-md-0 ">Search By</p>
            </div>
            <div class="col-md-10">
               <ul class="alpha-list">
                   <li><input type="submit" value="A" name="a"></li>
                   <li><input type="submit" value="B" name="b"></li>
                   <li><input type="submit" value="C" name="c"></li>
                   <li><input type="submit" value="D" name="d"></li>
                   <li><input type="submit" value="E" name="e"></li>
                   <li><input type="submit" value="F" name="f"></li>
                   <li><input type="submit" value="G" name="g"></li>
                   <li><input type="submit" value="H" name="h"></li>
                   <li><input type="submit" value="I" name="i"></li>
                   <li><input type="submit" value="J" name="j"></li>
                   <li><input type="submit" value="K" name="k"></li>
                   <li><input type="submit" value="L" name="l"></li>
                   <li><input type="submit" value="M" name="m"></li>
                   <li><input type="submit" value="N" name="n"></li>
                   <li><input type="submit" value="O" name="o"></li>
                   <li><input type="submit" value="P" name="p"></li>
                   <li><input type="submit" value="Q" name="q"></li>
                   <li><input type="submit" value="R" name="r"></li>
                   <li><input type="submit" value="S" name="s"></li>
                   <li><input type="submit" value="T" name="t"></li>
                   <li><input type="submit" value="U" name="u"></li>
                   <li><input type="submit" value="V" name="v"></li>
                   <li><input type="submit" value="W" name="w"></li>
                   <li><input type="submit" value="X" name="x"></li>
                   <li><input type="submit" value="Y" name="y"></li>
                   <li><input type="submit" value="Z" name="z"></li>
               </ul>
            </div>
        </div>
    </div>
    </form>
</section>
<?php include_once('includes/footer.inc.php'); ?>

