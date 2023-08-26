<?php
$sitemap = array(
    "Search Results - Members - Country Only (%country_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-1.xml",
    "Search Results - Members - Country / State (%country_name%/%state_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-state_name-1.xml",
    "Search Results - Members - Country / State / City (%country_name%/%state_name%/%city_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-state_name-city_name-1.xml",
    "Search Results - Members - Main / Sub Category (%profession_name%/%service_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-profession_name-service_name-1.xml",
    "Member Profile - Main Listing (%filename%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile-filename-1.xml",
    "Search Results - Members - Country / Sub Category (%country_name%/%service_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-service_name-1.xml",
    "Search Results - Members - Country / State / Main Category (%country_name%/%state_name%/%profession_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-state_name-profession_name-1.xml",
    "Search Results - Members - Country / State / Sub Category (%country_name%/%state_name%/%service_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-state_name-service_name-1.xml",
    "Search Results - Members - Country / State / Main / Sub Category (%country_name%/%state_name%/%profession_name%/%service_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-state_name-profession_name-service_name-1.xml",
    "Search Results - Members - Country / State / City / Sub Category (%country_name%/%state_name%/%city_name%/%service_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-state_name-city_name-service_name-1.xml",
    "Search Results - Members - State / Main Category %state_name%/%profession_name%" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-state_name-profession_name-1.xml",
    "Search Results - Members - State / Sub Category (%state_name%/%service_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-state_name-service_name-1.xml",
    "Search Results - Members - State / City / Main Category (%state_name%/%city_name%/%profession_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-state_name-city_name-profession_name-1.xml",
    "Search Results - Members - State / City / Sub Category (%state_name%/%city_name%/%service_name%)" => "https://www.nationaldrivinginstructors.com/filedata/cache/xml"
    );
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert_info">
                <i class="fa fa-info-circle"></i><b>PID: 395 - P1 -</b>
                – Basic setup with consultative approach - NationalDrivingInstructors.com
            </p>
            <button type="button" class="sbuttonwiz4 float-right btn btn-sm" data-toggle="modal" data-target="#myModal"><i aria-hidden="true" class="fa fa-plus" style="margin-right: 2px;"></i>Add</button>
			<!-- <a style="margin-left:10px;" href="http://ww2.managemydirectory.com/admin/go.php?widget=Site Allocation Report" class="sbuttonwiz4 float-right">
			<i aria-hidden="true" class="fa fa-cogs" style="margin-right: 2px;"></i>View Site Allocation Report</a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="table-header-module">
                <h2>SEO sitmap <span></span></h2>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr class="tablehead">
                        <th style="width:7%;">Id</th>
                        <th>Site Name</th>
                        <th>Site URL</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $id = 1;
                    foreach($sitemap as $SiteName => $SiteUrl) { ?>
                        <tr>
                            <td style="vertical-align:top;font-size:11px;">
                              <?= $id ?>
                            </td>
                            <td style="vertical-align:top;font-size:11px;">
                            <?php echo htmlspecialchars($SiteName); ?>
                            </td>
                            <td>
                                <a style="text-decoration:none;" href="<?= $SiteUrl ?>"> <?= $SiteUrl ?>
                                <i class="fa fa-external-link" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $id++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal Start Here-->
<div id="myModal" class="modal fade" role="dialog" data-controls-modal="myModal" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-dialog-centered" role="document" style="width:45%">
	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <h2 class="modal-title form_view_title" id="exampleModalCenterTitle"> Add New SEO sitmap <input type="button" class="btn btn-sm btn-success float-right" value="&times; Close" data-dismiss="modal">
		  </h2>
		</div>
		<div class="modal-body">
		  <div class="row">
			<div class="col-md-12">
			  <form action="" method="POST" id="">
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="SiteName"></label>
                          <input type="text" name="site_name" id="SiteName" class="form-control" placeholder="Please Enter Site Name" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Search Results - Members - Country Only (%country_name%)</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="SiteURL"></label>
                          <input type="text" name="Site_url" id="SiteURL" class="form-control" placeholder="Please Enter Site URL" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">https://www.nationaldrivinginstructors.com/filedata/cache/xml-sitemaps/profile_search_results-country_name-1.xml</small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-sm btn-block">Save changes</button>
                    </div>
                </div>
			  </form>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <!-- Modal End Here-->