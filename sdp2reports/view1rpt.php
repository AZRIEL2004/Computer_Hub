<?php
namespace PHPReportMaker12\project1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start();

// Autoload
include_once "rautoload.php";
?>
<?php

// Create page object
if (!isset($view1_rpt))
	$view1_rpt = new view1_rpt();
if (isset($Page))
	$OldPage = $Page;
$Page = &$view1_rpt;

// Run the page
$Page->run();

// Setup login status
SetClientVar("login", LoginStatus());
if (!$DashboardReport)
	WriteHeader(FALSE);

// Global Page Rendering event (in rusrfn*.php)
Page_Rendering();

// Page Rendering event
$Page->Page_Render();
?>
<?php if (!$DashboardReport) { ?>
<?php include_once "rheader.php" ?>
<?php } ?>
<?php if ($Page->Export == "" || $Page->Export == "print") { ?>
<script>
currentPageID = ew.PAGE_ID = "rpt"; // Page ID
</script>
<?php } ?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<script>

// Form object
var fview1rpt = currentForm = new ew.Form("fview1rpt");

// Validate method
fview1rpt.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj), elm;
		elm = this.getElements("x_price");
		if (elm && !ew.checkNumber(elm.value)) {
			if (!this.onError(elm, "<?php echo JsEncode($Page->price->errorMessage()) ?>"))
				return false;
		}

	// Call Form Custom Validate event
	if (!this.Form_CustomValidate(fobj))
		return false;
	return true;
}

// Form_CustomValidate method
fview1rpt.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}
<?php if (CLIENT_VALIDATE) { ?>
fview1rpt.validateRequired = true; // Uses JavaScript validation
<?php } else { ?>
fview1rpt.validateRequired = false; // No JavaScript validation
<?php } ?>

// Use Ajax
fview1rpt.lists["x_category_name"] = <?php echo $view1_rpt->category_name->Lookup->toClientList() ?>;
fview1rpt.lists["x_category_name"].popupValues = <?php echo json_encode($view1_rpt->category_name->SelectionList) ?>;
fview1rpt.lists["x_category_name"].popupOptions = <?php echo JsonEncode($view1_rpt->category_name->popupOptions()) ?>;
fview1rpt.lists["x_brand_name"] = <?php echo $view1_rpt->brand_name->Lookup->toClientList() ?>;
fview1rpt.lists["x_brand_name"].popupValues = <?php echo json_encode($view1_rpt->brand_name->SelectionList) ?>;
fview1rpt.lists["x_brand_name"].popupOptions = <?php echo JsonEncode($view1_rpt->brand_name->popupOptions()) ?>;
fview1rpt.lists["x_price"] = <?php echo $view1_rpt->price->Lookup->toClientList() ?>;
fview1rpt.lists["x_price"].popupValues = <?php echo json_encode($view1_rpt->price->SelectionList) ?>;
fview1rpt.lists["x_price"].popupOptions = <?php echo JsonEncode($view1_rpt->price->popupOptions()) ?>;
</script>
<?php } ?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<a id="top"></a>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
<!-- Content Container -->
<div id="ew-container" class="container-fluid ew-container">
<?php } ?>
<?php if (ReportParam("showfilter") === TRUE) { ?>
<?php $Page->showFilterList(TRUE) ?>
<?php } ?>
<div class="btn-toolbar ew-toolbar">
<?php
if (!$Page->DrillDownInPanel) {
	$Page->ExportOptions->render("body");
	$Page->SearchOptions->render("body");
	$Page->FilterOptions->render("body");
	$Page->GenerateOptions->render("body");
}
?>
</div>
<?php $Page->showPageHeader(); ?>
<?php $Page->showMessage(); ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
<div class="row">
<?php } ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
<!-- Center Container - Report -->
<div id="ew-center" class="<?php echo $view1_rpt->CenterContentClass ?>">
<?php } ?>
<!-- Summary Report begins -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="report_summary">
<?php } ?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<!-- Search form (begin) -->
<?php

	// Render search row
	$Page->resetAttributes();
	$Page->RowType = ROWTYPE_SEARCH;
	$Page->renderRow();
?>
<form name="fview1rpt" id="fview1rpt" class="form-inline ew-form ew-ext-filter-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($Page->Filter <> "") ? " show" : " show"; ?>
<div id="fview1rpt-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ew-row d-sm-flex">
<div id="c_category_name" class="ew-cell form-group">
	<label for="x_category_name" class="ew-search-caption ew-label"><?php echo $Page->category_name->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_category_name" id="z_category_name" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->category_name->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="view1" data-field="x_category_name" id="x_category_name" name="x_category_name" size="30" maxlength="70" placeholder="<?php echo HtmlEncode($Page->category_name->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->category_name->AdvancedSearch->SearchValue) ?>"<?php echo $Page->category_name->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_2" class="ew-row d-sm-flex">
<div id="c_brand_name" class="ew-cell form-group">
	<label for="x_brand_name" class="ew-search-caption ew-label"><?php echo $Page->brand_name->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_brand_name" id="z_brand_name" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->brand_name->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="view1" data-field="x_brand_name" id="x_brand_name" name="x_brand_name" size="30" maxlength="70" placeholder="<?php echo HtmlEncode($Page->brand_name->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->brand_name->AdvancedSearch->SearchValue) ?>"<?php echo $Page->brand_name->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_3" class="ew-row d-sm-flex">
<div id="c_price" class="ew-cell form-group">
	<label for="x_price" class="ew-search-caption ew-label"><?php echo $Page->price->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("<="); ?><input type="hidden" name="z_price" id="z_price" value="<="></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->price->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="view1" data-field="x_price" id="x_price" name="x_price" size="30" maxlength="22" placeholder="<?php echo HtmlEncode($Page->price->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->price->AdvancedSearch->SearchValue) ?>"<?php echo $Page->price->editAttributes() ?>>
</span>
</div>
</div>
<div class="ew-row d-sm-flex">
<button type="submit" name="btn-submit" id="btn-submit" class="btn btn-primary"><?php echo $ReportLanguage->phrase("Search") ?></button>
<button type="reset" name="btn-reset" id="btn-reset" class="btn hide"><?php echo $ReportLanguage->phrase("Reset") ?></button>
</div>
</div>
</form>
<script>
fview1rpt.filterList = <?php echo $Page->getFilterList() ?>;
</script>
<!-- Search form (end) -->
<?php } ?>
<?php if ($Page->ShowCurrentFilter) { ?>
<?php $Page->showFilterList() ?>
<?php } ?>
<?php

// Set the last group to display if not export all
if ($Page->ExportAll && $Page->Export <> "") {
	$Page->StopGroup = $Page->TotalGroups;
} else {
	$Page->StopGroup = $Page->StartGroup + $Page->DisplayGroups - 1;
}

// Stop group <= total number of groups
if (intval($Page->StopGroup) > intval($Page->TotalGroups))
	$Page->StopGroup = $Page->TotalGroups;
$Page->RecordCount = 0;
$Page->RecordIndex = 0;

// Get first row
if ($Page->TotalGroups > 0) {
	$Page->loadRowValues(TRUE);
	$Page->GroupCount = 1;
}
$Page->GroupIndexes = InitArray(2, -1);
$Page->GroupIndexes[0] = -1;
$Page->GroupIndexes[1] = $Page->StopGroup - $Page->StartGroup + 1;
while ($Page->Recordset && !$Page->Recordset->EOF && $Page->GroupCount <= $Page->DisplayGroups || $Page->ShowHeader) {

	// Show dummy header for custom template
	// Show header

	if ($Page->ShowHeader) {
?>
<?php if ($Page->Export <> "pdf") { ?>
<?php if ($Page->Export == "word" || $Page->Export == "excel") { ?>
<div class="ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } else { ?>
<div class="card ew-card ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } ?>
<?php } ?>
<!-- Report grid (begin) -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="gmp_view1" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($Page->product_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="product_id"><div class="view1_product_id"><span class="ew-table-header-caption"><?php echo $Page->product_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="product_id">
<?php if ($Page->sortUrl($Page->product_id) == "") { ?>
		<div class="ew-table-header-btn view1_product_id">
			<span class="ew-table-header-caption"><?php echo $Page->product_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view1_product_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->product_id) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->product_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->product_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->product_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->category_name->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="category_name"><div class="view1_category_name"><span class="ew-table-header-caption"><?php echo $Page->category_name->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="category_name">
<?php if ($Page->sortUrl($Page->category_name) == "") { ?>
		<div class="ew-table-header-btn view1_category_name">
			<span class="ew-table-header-caption"><?php echo $Page->category_name->caption() ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_category_name', form: 'fview1rpt', name: 'view1_category_name', range: false, from: '<?php echo $Page->category_name->RangeFrom; ?>', to: '<?php echo $Page->category_name->RangeTo; ?>' });" id="x_category_name<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view1_category_name" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->category_name) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->category_name->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->category_name->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->category_name->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_category_name', form: 'fview1rpt', name: 'view1_category_name', range: false, from: '<?php echo $Page->category_name->RangeFrom; ?>', to: '<?php echo $Page->category_name->RangeTo; ?>' });" id="x_category_name<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->brand_name->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="brand_name"><div class="view1_brand_name"><span class="ew-table-header-caption"><?php echo $Page->brand_name->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="brand_name">
<?php if ($Page->sortUrl($Page->brand_name) == "") { ?>
		<div class="ew-table-header-btn view1_brand_name">
			<span class="ew-table-header-caption"><?php echo $Page->brand_name->caption() ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_brand_name', form: 'fview1rpt', name: 'view1_brand_name', range: false, from: '<?php echo $Page->brand_name->RangeFrom; ?>', to: '<?php echo $Page->brand_name->RangeTo; ?>' });" id="x_brand_name<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view1_brand_name" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->brand_name) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->brand_name->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->brand_name->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->brand_name->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_brand_name', form: 'fview1rpt', name: 'view1_brand_name', range: false, from: '<?php echo $Page->brand_name->RangeFrom; ?>', to: '<?php echo $Page->brand_name->RangeTo; ?>' });" id="x_brand_name<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->product_name->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="product_name"><div class="view1_product_name"><span class="ew-table-header-caption"><?php echo $Page->product_name->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="product_name">
<?php if ($Page->sortUrl($Page->product_name) == "") { ?>
		<div class="ew-table-header-btn view1_product_name">
			<span class="ew-table-header-caption"><?php echo $Page->product_name->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view1_product_name" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->product_name) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->product_name->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->product_name->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->product_name->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->product_details->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="product_details"><div class="view1_product_details"><span class="ew-table-header-caption"><?php echo $Page->product_details->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="product_details">
<?php if ($Page->sortUrl($Page->product_details) == "") { ?>
		<div class="ew-table-header-btn view1_product_details">
			<span class="ew-table-header-caption"><?php echo $Page->product_details->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view1_product_details" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->product_details) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->product_details->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->product_details->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->product_details->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->price->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="price"><div class="view1_price"><span class="ew-table-header-caption"><?php echo $Page->price->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="price">
<?php if ($Page->sortUrl($Page->price) == "") { ?>
		<div class="ew-table-header-btn view1_price">
			<span class="ew-table-header-caption"><?php echo $Page->price->caption() ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_price', form: 'fview1rpt', name: 'view1_price', range: true, from: '<?php echo $Page->price->RangeFrom; ?>', to: '<?php echo $Page->price->RangeTo; ?>' });" id="x_price<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view1_price" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->price) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->price->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->price->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->price->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_price', form: 'fview1rpt', name: 'view1_price', range: true, from: '<?php echo $Page->price->RangeFrom; ?>', to: '<?php echo $Page->price->RangeTo; ?>' });" id="x_price<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
	</tr>
</thead>
<tbody>
<?php
		if ($Page->TotalGroups == 0) break; // Show header only
		$Page->ShowHeader = FALSE;
	}
	$Page->RecordCount++;
	$Page->RecordIndex++;
?>
<?php

		// Render detail row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_DETAIL;
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->product_id->Visible) { ?>
		<td data-field="product_id"<?php echo $Page->product_id->cellAttributes() ?>>
<span<?php echo $Page->product_id->viewAttributes() ?>><?php echo $Page->product_id->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->category_name->Visible) { ?>
		<td data-field="category_name"<?php echo $Page->category_name->cellAttributes() ?>>
<span<?php echo $Page->category_name->viewAttributes() ?>><?php echo $Page->category_name->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->brand_name->Visible) { ?>
		<td data-field="brand_name"<?php echo $Page->brand_name->cellAttributes() ?>>
<span<?php echo $Page->brand_name->viewAttributes() ?>><?php echo $Page->brand_name->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->product_name->Visible) { ?>
		<td data-field="product_name"<?php echo $Page->product_name->cellAttributes() ?>>
<span<?php echo $Page->product_name->viewAttributes() ?>><?php echo $Page->product_name->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->product_details->Visible) { ?>
		<td data-field="product_details"<?php echo $Page->product_details->cellAttributes() ?>>
<span<?php echo $Page->product_details->viewAttributes() ?>><?php echo $Page->product_details->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->price->Visible) { ?>
		<td data-field="price"<?php echo $Page->price->cellAttributes() ?>>
<span<?php echo $Page->price->viewAttributes() ?>><?php echo $Page->price->getViewValue() ?></span></td>
<?php } ?>
	</tr>
<?php

		// Accumulate page summary
		$Page->accumulateSummary();

		// Get next record
		$Page->loadRowValues();
	$Page->GroupCount++;
} // End while
?>
<?php if ($Page->TotalGroups > 0) { ?>
</tbody>
<tfoot>
	</tfoot>
<?php } elseif (!$Page->ShowHeader && TRUE) { // No header displayed ?>
<?php if ($Page->Export <> "pdf") { ?>
<?php if ($Page->Export == "word" || $Page->Export == "excel") { ?>
<div class="ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } else { ?>
<div class="card ew-card ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } ?>
<?php } ?>
<!-- Report grid (begin) -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="gmp_view1" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<?php } ?>
<?php if ($Page->TotalGroups > 0 || TRUE) { // Show footer ?>
</table>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<?php if ($Page->Export == "" && !($Page->DrillDown && $Page->TotalGroups > 0)) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php include "view1_pager.php" ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<?php } ?>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<!-- Summary Report Ends -->
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
</div>
<!-- /#ew-center -->
<?php } ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
</div>
<!-- /.row -->
<?php } ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
</div>
<!-- /.ew-container -->
<?php } ?>
<?php
$Page->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php

// Close recordsets
if ($Page->GroupRecordset)
	$Page->GroupRecordset->Close();
if ($Page->Recordset)
	$Page->Recordset->Close();
?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<script>

// Write your table-specific startup script here
// console.log("page loaded");

</script>
<?php } ?>
<?php if (!$DashboardReport) { ?>
<?php include_once "rfooter.php" ?>
<?php } ?>
<?php
$Page->terminate();
if (isset($OldPage))
	$Page = $OldPage;
?>