<table class="table">
    <th>File</th>
    <th>Actions</th>
    <?php echo tableContent($files, $path); ?>
</table>
<div class="nav">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="upload" id="files" style="display:none;"/>
        <label class="push" for="files">Choose file</label>
        <button class="push" type="submit">Upload file</button>
    </form>
    <a href="<?php echo trimLastDir($path)?>" class="button">Back</a>
    <a href="index.php" class="button">Home</a>
</div>

<form class="create" action="index.php" method="GET">
    <input type="hidden" name="path" value="<?php echo $path ?>"/>
    <input class="docname" placeholder="Name of new directory" type="text" id="create" name="create">
    <button class="push" type="submit">Create Directory</button>
    <form class="create" action="index.php" method="GET">
        <input class="docname" placeholder="Name of new file" type="text" name="createfile">
        <button class="push" type="submit">Create File</button>
    </form>



</form>