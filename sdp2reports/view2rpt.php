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
if (!isset($view2_rpt))
	$view2_rpt = new view2_rpt();
if (isset($Page))
	$OldPage = $Page;
$Page = &$view2_rpt;

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
var fview2rpt = currentForm = new ew.Form("fview2rpt");

// Validate method
fview2rpt.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj), elm;
		elm = this.getElements("x_order_date");
		if (elm && !ew.checkDateDef(elm.value)) {
			if (!this.onError(elm, "<?php echo JsEncode($Page->order_date->errorMessage()) ?>"))
				return false;
		}
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
fview2rpt.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}
<?php if (CLIENT_VALIDATE) { ?>
fview2rpt.validateRequired = true; // Uses JavaScript validation
<?php } else { ?>
fview2rpt.validateRequired = false; // No JavaScript validation
<?php } ?>

// Use Ajax
fview2rpt.lists["x_order_date"] = <?php echo $view2_rpt->order_date->Lookup->toClientList() ?>;
fview2rpt.lists["x_order_date"].popupValues = <?php echo json_encode($view2_rpt->order_date->SelectionList) ?>;
fview2rpt.lists["x_order_date"].popupOptions = <?php echo JsonEncode($view2_rpt->order_date->popupOptions()) ?>;
fview2rpt.lists["x_order_status"] = <?php echo $view2_rpt->order_status->Lookup->toClientList() ?>;
fview2rpt.lists["x_order_status"].popupValues = <?php echo json_encode($view2_rpt->order_status->SelectionList) ?>;
fview2rpt.lists["x_order_status"].popupOptions = <?php echo JsonEncode($view2_rpt->order_status->popupOptions()) ?>;
fview2rpt.lists["x_price"] = <?php echo $view2_rpt->price->Lookup->toClientList() ?>;
fview2rpt.lists["x_price"].popupValues = <?php echo json_encode($view2_rpt->price->SelectionList) ?>;
fview2rpt.lists["x_price"].popupOptions = <?php echo JsonEncode($view2_rpt->price->popupOptions()) ?>;
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
<div id="ew-center" class="<?php echo $view2_rpt->CenterContentClass ?>">
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
<form name="fview2rpt" id="fview2rpt" class="form-inline ew-form ew-ext-filter-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($Page->Filter <> "") ? " show" : " show"; ?>
<div id="fview2rpt-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ew-row d-sm-flex">
<div id="c_order_date" class="ew-cell form-group">
	<label for="x_order_date" class="ew-search-caption ew-label"><?php echo $Page->order_date->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("<="); ?><input type="hidden" name="z_order_date" id="z_order_date" value="<="></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->order_date->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="view2" data-field="x_order_date" id="x_order_date" name="x_order_date" maxlength="10" placeholder="<?php echo HtmlEncode($Page->order_date->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->order_date->AdvancedSearch->SearchValue) ?>"<?php echo $Page->order_date->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_2" class="ew-row d-sm-flex">
<div id="c_order_status" class="ew-cell form-group">
	<label for="x_order_status" class="ew-search-caption ew-label"><?php echo $Page->order_status->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_order_status" id="z_order_status" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->order_status->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="view2" data-field="x_order_status" id="x_order_status" name="x_order_status" size="30" maxlength="70" placeholder="<?php echo HtmlEncode($Page->order_status->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->order_status->AdvancedSearch->SearchValue) ?>"<?php echo $Page->order_status->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_3" class="ew-row d-sm-flex">
<div id="c_price" class="ew-cell form-group">
	<label for="x_price" class="ew-search-caption ew-label"><?php echo $Page->price->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("<="); ?><input type="hidden" name="z_price" id="z_price" value="<="></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->price->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="view2" data-field="x_price" id="x_price" name="x_price" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($Page->price->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->price->AdvancedSearch->SearchValue) ?>"<?php echo $Page->price->editAttributes() ?>>
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
fview2rpt.filterList = <?php echo $Page->getFilterList() ?>;
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
<div id="gmp_view2" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($Page->order_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="order_id"><div class="view2_order_id"><span class="ew-table-header-caption"><?php echo $Page->order_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="order_id">
<?php if ($Page->sortUrl($Page->order_id) == "") { ?>
		<div class="ew-table-header-btn view2_order_id">
			<span class="ew-table-header-caption"><?php echo $Page->order_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_order_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->order_id) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->order_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->order_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->order_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->product_name->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="product_name"><div class="view2_product_name"><span class="ew-table-header-caption"><?php echo $Page->product_name->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="product_name">
<?php if ($Page->sortUrl($Page->product_name) == "") { ?>
		<div class="ew-table-header-btn view2_product_name">
			<span class="ew-table-header-caption"><?php echo $Page->product_name->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_product_name" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->product_name) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->product_name->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->product_name->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->product_name->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->order_date->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="order_date"><div class="view2_order_date"><span class="ew-table-header-caption"><?php echo $Page->order_date->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="order_date">
<?php if ($Page->sortUrl($Page->order_date) == "") { ?>
		<div class="ew-table-header-btn view2_order_date">
			<span class="ew-table-header-caption"><?php echo $Page->order_date->caption() ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_order_date', form: 'fview2rpt', name: 'view2_order_date', range: true, from: '<?php echo $Page->order_date->RangeFrom; ?>', to: '<?php echo $Page->order_date->RangeTo; ?>' });" id="x_order_date<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_order_date" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->order_date) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->order_date->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->order_date->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->order_date->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_order_date', form: 'fview2rpt', name: 'view2_order_date', range: true, from: '<?php echo $Page->order_date->RangeFrom; ?>', to: '<?php echo $Page->order_date->RangeTo; ?>' });" id="x_order_date<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->user_name->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="user_name"><div class="view2_user_name"><span class="ew-table-header-caption"><?php echo $Page->user_name->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="user_name">
<?php if ($Page->sortUrl($Page->user_name) == "") { ?>
		<div class="ew-table-header-btn view2_user_name">
			<span class="ew-table-header-caption"><?php echo $Page->user_name->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_user_name" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->user_name) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->user_name->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->user_name->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->user_name->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->order_status->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="order_status"><div class="view2_order_status"><span class="ew-table-header-caption"><?php echo $Page->order_status->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="order_status">
<?php if ($Page->sortUrl($Page->order_status) == "") { ?>
		<div class="ew-table-header-btn view2_order_status">
			<span class="ew-table-header-caption"><?php echo $Page->order_status->caption() ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_order_status', form: 'fview2rpt', name: 'view2_order_status', range: true, from: '<?php echo $Page->order_status->RangeFrom; ?>', to: '<?php echo $Page->order_status->RangeTo; ?>' });" id="x_order_status<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_order_status" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->order_status) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->order_status->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->order_status->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->order_status->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_order_status', form: 'fview2rpt', name: 'view2_order_status', range: true, from: '<?php echo $Page->order_status->RangeFrom; ?>', to: '<?php echo $Page->order_status->RangeTo; ?>' });" id="x_order_status<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->order_amount->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="order_amount"><div class="view2_order_amount"><span class="ew-table-header-caption"><?php echo $Page->order_amount->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="order_amount">
<?php if ($Page->sortUrl($Page->order_amount) == "") { ?>
		<div class="ew-table-header-btn view2_order_amount">
			<span class="ew-table-header-caption"><?php echo $Page->order_amount->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_order_amount" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->order_amount) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->order_amount->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->order_amount->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->order_amount->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->quantity->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="quantity"><div class="view2_quantity"><span class="ew-table-header-caption"><?php echo $Page->quantity->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="quantity">
<?php if ($Page->sortUrl($Page->quantity) == "") { ?>
		<div class="ew-table-header-btn view2_quantity">
			<span class="ew-table-header-caption"><?php echo $Page->quantity->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_quantity" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->quantity) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->quantity->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->quantity->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->quantity->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->price->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="price"><div class="view2_price"><span class="ew-table-header-caption"><?php echo $Page->price->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="price">
<?php if ($Page->sortUrl($Page->price) == "") { ?>
		<div class="ew-table-header-btn view2_price">
			<span class="ew-table-header-caption"><?php echo $Page->price->caption() ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_price', form: 'fview2rpt', name: 'view2_price', range: true, from: '<?php echo $Page->price->RangeFrom; ?>', to: '<?php echo $Page->price->RangeTo; ?>' });" id="x_price<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
	<?php } ?>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer view2_price" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->price) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->price->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->price->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->price->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
	<?php if (!$DashboardReport) { ?>
			<a class="ew-table-header-popup" title="<?php echo $ReportLanguage->phrase("Filter"); ?>" onclick="ew.showPopup.call(this, event, { id: 'x_price', form: 'fview2rpt', name: 'view2_price', range: true, from: '<?php echo $Page->price->RangeFrom; ?>', to: '<?php echo $Page->price->RangeTo; ?>' });" id="x_price<?php echo $Page->Counts[0][0]; ?>"><span class="icon-filter"></span></a>
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
<?php if ($Page->order_id->Visible) { ?>
		<td data-field="order_id"<?php echo $Page->order_id->cellAttributes() ?>>
<span<?php echo $Page->order_id->viewAttributes() ?>><?php echo $Page->order_id->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->product_name->Visible) { ?>
		<td data-field="product_name"<?php echo $Page->product_name->cellAttributes() ?>>
<span<?php echo $Page->product_name->viewAttributes() ?>><?php echo $Page->product_name->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->order_date->Visible) { ?>
		<td data-field="order_date"<?php echo $Page->order_date->cellAttributes() ?>>
<span<?php echo $Page->order_date->viewAttributes() ?>><?php echo $Page->order_date->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->user_name->Visible) { ?>
		<td data-field="user_name"<?php echo $Page->user_name->cellAttributes() ?>>
<span<?php echo $Page->user_name->viewAttributes() ?>><?php echo $Page->user_name->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->order_status->Visible) { ?>
		<td data-field="order_status"<?php echo $Page->order_status->cellAttributes() ?>>
<span<?php echo $Page->order_status->viewAttributes() ?>><?php echo $Page->order_status->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->order_amount->Visible) { ?>
		<td data-field="order_amount"<?php echo $Page->order_amount->cellAttributes() ?>>
<span<?php echo $Page->order_amount->viewAttributes() ?>><?php echo $Page->order_amount->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->quantity->Visible) { ?>
		<td data-field="quantity"<?php echo $Page->quantity->cellAttributes() ?>>
<span<?php echo $Page->quantity->viewAttributes() ?>><?php echo $Page->quantity->getViewValue() ?></span></td>
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
<div id="gmp_view2" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
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
<?php include "view2_pager.php" ?>
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