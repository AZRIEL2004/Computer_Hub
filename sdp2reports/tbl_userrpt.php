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
if (!isset($tbl_user_rpt))
	$tbl_user_rpt = new tbl_user_rpt();
if (isset($Page))
	$OldPage = $Page;
$Page = &$tbl_user_rpt;

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
<div id="ew-center" class="<?php echo $tbl_user_rpt->CenterContentClass ?>">
<?php } ?>
<!-- Summary Report begins -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="report_summary">
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
<div id="gmp_tbl_user" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($Page->user_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="user_id"><div class="tbl_user_user_id"><span class="ew-table-header-caption"><?php echo $Page->user_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="user_id">
<?php if ($Page->sortUrl($Page->user_id) == "") { ?>
		<div class="ew-table-header-btn tbl_user_user_id">
			<span class="ew-table-header-caption"><?php echo $Page->user_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_user_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->user_id) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->user_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->user_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->user_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->user_type_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="user_type_id"><div class="tbl_user_user_type_id"><span class="ew-table-header-caption"><?php echo $Page->user_type_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="user_type_id">
<?php if ($Page->sortUrl($Page->user_type_id) == "") { ?>
		<div class="ew-table-header-btn tbl_user_user_type_id">
			<span class="ew-table-header-caption"><?php echo $Page->user_type_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_user_type_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->user_type_id) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->user_type_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->user_type_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->user_type_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->user_name->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="user_name"><div class="tbl_user_user_name"><span class="ew-table-header-caption"><?php echo $Page->user_name->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="user_name">
<?php if ($Page->sortUrl($Page->user_name) == "") { ?>
		<div class="ew-table-header-btn tbl_user_user_name">
			<span class="ew-table-header-caption"><?php echo $Page->user_name->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_user_name" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->user_name) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->user_name->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->user_name->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->user_name->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->gender->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="gender"><div class="tbl_user_gender"><span class="ew-table-header-caption"><?php echo $Page->gender->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="gender">
<?php if ($Page->sortUrl($Page->gender) == "") { ?>
		<div class="ew-table-header-btn tbl_user_gender">
			<span class="ew-table-header-caption"><?php echo $Page->gender->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_gender" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->gender) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->gender->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->gender->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->gender->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->email_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="email_id"><div class="tbl_user_email_id"><span class="ew-table-header-caption"><?php echo $Page->email_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="email_id">
<?php if ($Page->sortUrl($Page->email_id) == "") { ?>
		<div class="ew-table-header-btn tbl_user_email_id">
			<span class="ew-table-header-caption"><?php echo $Page->email_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_email_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->email_id) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->email_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->email_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->email_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->phone_number->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="phone_number"><div class="tbl_user_phone_number"><span class="ew-table-header-caption"><?php echo $Page->phone_number->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="phone_number">
<?php if ($Page->sortUrl($Page->phone_number) == "") { ?>
		<div class="ew-table-header-btn tbl_user_phone_number">
			<span class="ew-table-header-caption"><?php echo $Page->phone_number->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_phone_number" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->phone_number) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->phone_number->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->phone_number->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->phone_number->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->password->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="password"><div class="tbl_user_password"><span class="ew-table-header-caption"><?php echo $Page->password->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="password">
<?php if ($Page->sortUrl($Page->password) == "") { ?>
		<div class="ew-table-header-btn tbl_user_password">
			<span class="ew-table-header-caption"><?php echo $Page->password->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_password" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->password) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->password->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->password->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->password->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->pincode->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="pincode"><div class="tbl_user_pincode"><span class="ew-table-header-caption"><?php echo $Page->pincode->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="pincode">
<?php if ($Page->sortUrl($Page->pincode) == "") { ?>
		<div class="ew-table-header-btn tbl_user_pincode">
			<span class="ew-table-header-caption"><?php echo $Page->pincode->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer tbl_user_pincode" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->pincode) ?>',0);">
			<span class="ew-table-header-caption"><?php echo $Page->pincode->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->pincode->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->pincode->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
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
<?php if ($Page->user_id->Visible) { ?>
		<td data-field="user_id"<?php echo $Page->user_id->cellAttributes() ?>>
<span<?php echo $Page->user_id->viewAttributes() ?>><?php echo $Page->user_id->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->user_type_id->Visible) { ?>
		<td data-field="user_type_id"<?php echo $Page->user_type_id->cellAttributes() ?>>
<span<?php echo $Page->user_type_id->viewAttributes() ?>><?php echo $Page->user_type_id->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->user_name->Visible) { ?>
		<td data-field="user_name"<?php echo $Page->user_name->cellAttributes() ?>>
<span<?php echo $Page->user_name->viewAttributes() ?>><?php echo $Page->user_name->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->gender->Visible) { ?>
		<td data-field="gender"<?php echo $Page->gender->cellAttributes() ?>>
<span<?php echo $Page->gender->viewAttributes() ?>><?php echo $Page->gender->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->email_id->Visible) { ?>
		<td data-field="email_id"<?php echo $Page->email_id->cellAttributes() ?>>
<span<?php echo $Page->email_id->viewAttributes() ?>><?php echo $Page->email_id->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->phone_number->Visible) { ?>
		<td data-field="phone_number"<?php echo $Page->phone_number->cellAttributes() ?>>
<span<?php echo $Page->phone_number->viewAttributes() ?>><?php echo $Page->phone_number->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->password->Visible) { ?>
		<td data-field="password"<?php echo $Page->password->cellAttributes() ?>>
<span<?php echo $Page->password->viewAttributes() ?>><?php echo $Page->password->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->pincode->Visible) { ?>
		<td data-field="pincode"<?php echo $Page->pincode->cellAttributes() ?>>
<span<?php echo $Page->pincode->viewAttributes() ?>><?php echo $Page->pincode->getViewValue() ?></span></td>
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
<?php } elseif (!$Page->ShowHeader && FALSE) { // No header displayed ?>
<?php if ($Page->Export <> "pdf") { ?>
<?php if ($Page->Export == "word" || $Page->Export == "excel") { ?>
<div class="ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } else { ?>
<div class="card ew-card ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } ?>
<?php } ?>
<!-- Report grid (begin) -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="gmp_tbl_user" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<?php } ?>
<?php if ($Page->TotalGroups > 0 || FALSE) { // Show footer ?>
</table>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<?php if ($Page->Export == "" && !($Page->DrillDown && $Page->TotalGroups > 0)) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php include "tbl_user_pager.php" ?>
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