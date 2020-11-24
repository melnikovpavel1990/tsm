<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-6">

            <form role="form" method="post" action="/admin/?action=save_page" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Text Input</label>
                    <input class="form-control" name="title">
                    <p class="help-block">Example block-level help text here.</p>
                </div>

                <div class="form-group">
                    <label>Text Input</label>
                    <input class="form-control" name="page_img" type="file">
                    <p class="help-block">Example block-level help text here.</p>
                </div>

                <div class="form-group">
                    <label>Text Input</label>
                    <input class="form-control" name="author">
                    <p class="help-block">Example block-level help text here.</p>
                </div>

                <div class="form-group">
                    <label>Text Input</label>
                    <input class="form-control" row="3" name="content">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
               <button type="submit" class="btn btn-default">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button>
            </form>
        </div>
    </div>
</div>
</div>