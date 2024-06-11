<div class="col-md-4">
    <div class="btn-group  markad-services-holder markad-margin-top-screen xs-sm">
        <button class="btn btn-default btn-block dropdown-toggle markad-flexbox" data-toggle="dropdown">
            <div class="markad-flex-cell">
                <i class="glyphicon glyphicon-tag markad-margin-right-md"></i>
            </div>
            <div class="markad-flex-cell text-left" style="width: 100%">
                <span class="markad-js-count">No category selected</span>
            </div>
            <div class="markad-flex-cell"><div class="markad-margin-left-md"><span class="caret"></span></div></div>
        </button>
        <ul class="dropdown-menu markad-entity-selector" style="overflow-y: scroll;height: 300px">
            <li>
                <a class="checkbox checkbox-success" href="#">
                    <input type="checkbox" class="markad-check-all-entities" value="any">
                    <label>All Category </label>
                </a>
            </li>
            <?php
            $cat =  get_maincategory();
            foreach($cat as $option)
            {
                $catid = $option['id'];
                ?>
                <li class="main-category">
                    <a class="checkbox checkbox-success" href="#">
                        <input type="checkbox" class="markad-js-check-entity"  value="<?php echo $option['id'] ?>" data-title="<?php echo $option['name'] ?>">
                        <label><i class="<?php echo $option['icon'] ?>"></i> <?php echo $option['name'] ?></label>
                    </a>
                    <ul style="margin-left: 28px;">
                        <?php
                        $subcat =  get_subcat_of_maincat($catid);
                        foreach($subcat as $sub){
                            ?>
                            <li class="subcategory">
                                <a class="checkbox checkbox-success" href="#">
                                    <input type="checkbox" class="markad-js-check-sub-entity" value="<?php echo $sub['id'] ?>" data-title="<?php echo $sub['name'] ?>">
                                    <label><?php echo $sub['name'] ?><?php echo $sub['id'] ?></label>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>

        </ul>


    </div>
    <?php
    if(get_option("userlangsel") == '1'){
    ?>
    <button type="button" class="btn btn-sm btn-warning markad_language_translation" data-custom-field-id="" data-category-type="custom-field"> <span class="ladda-label"><i class="fa fa-language"></i> Language Translation</span></button>
    <?php } ?>
</div>

