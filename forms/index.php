<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

$pageTitle = "Forms";

$query = "";
?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$pageTitle?></title>

<!-- Site CSS  -->
<?php require_once WEB_ROOT . "includes/css.php"; ?>
<!-- /Site CSS -->

<style>
#forms .panel-collapse > a {
    padding: 2px;
    display: block;
}
#forms .panel-collapse > a:last-child {
    margin-bottom: 5px;
}
</style>

</head>
<body>

<!-- Site Header  -->
<?php include WEB_ROOT . "header.php"; ?>
<!-- /Site Header -->

<div class="container">
    <section class="jumbotron text-xs-center">
        <h1 class="jumbotron-heading">West Point Real Estate</h1>
        <p class="lead text-muted">
            The BEST for our customers, period.
        </p>
        <br />
        <br />
        <br />
    </section>

    <h1 class="page-header">Forms</h1>

    <div id="forms" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="formCat1">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#forms" href="#formCat1Files" aria-expanded="false" aria-controls="formCat1Files">
              Contract Packages
            </a>
          </h4>
        </div>
        <div id="formCat1Files" class="panel-collapse collapse" role="tabpanel" aria-labelledby="formCat1">
            <a href="files/Contract Packages/SageACQ_OO_IN_SALES_CONTRACT_all_areas1.pdf" target="_blank">OO and Investor Packages</a>
            <a href="files/Contract Packages/SAGE_NON-PROFIT_SALES_CONTRACT_all_areas1.pdf" target="_blank">Non-Profit, NSP and Local Government Packages</a>
            <a href="files/Contract Packages/SageACQ_GNND_SALES_CONTRACT_all_areas.pdf" target="_blank">GNND (Officer/Teacher/Emergency Medical Technician/Firefighter)</a>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="formCat2">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#forms" href="#formCat2Files" aria-expanded="false" aria-controls="formCat2Files">
              Amendments
            </a>
          </h4>
        </div>
        <div id="formCat2Files" class="panel-collapse collapse" role="tabpanel" aria-labelledby="formCat2">
            <a href="files/Amendments/Amendments-Amendment-to-Sales-Contract" target="_blank">Sales Contract</a>
            <a href="files/Amendments/Atlanta-Amendments-Add_Remove-Purchaser1" target="_blank">Add/Remove Purchaser</a>
            <a href="files/Amendments/Atlanta-Amendments-Change_Finance_Type" target="_blank">Change Finance Type</a>
            <a href="files/Amendments/Atlanta-Amendments-Corrections-to-Buyer’s-Name_-Address_Style_Status1" target="_blank">Corrections to Buyer’s Name/Address/Style/Status</a>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="formCat3">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#forms" href="#formCat3Files" aria-expanded="false" aria-controls="formCat3Files">
              Deeds
            </a>
          </h4>
        </div>
        <div id="formCat3Files" class="panel-collapse collapse" role="tabpanel" aria-labelledby="formCat3">
            <a href="files/Deeds/FLDeed.doc" target="_blank">Florida Deed</a>
            <a href="files/Deeds/GA-Deed.doc" target="_blank">Georgia Deed</a>
            <a href="files/Deeds/IN-Deed.doc" target="_blank">Indiana Deed</a>
            <a href="files/Deeds/KY-Deed.doc" target="_blank">Kentucky Deed</a>
            <a href="files/Deeds/GNND-Deed.doc" target="_blank">GNND Deed</a>
            <a href="files/Deeds/GNNDNote.doc" target="_blank">GNND Note</a>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="formCat4">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#forms" href="#formCat4Files" aria-expanded="false" aria-controls="formCat4Files">
              Buyer Select
            </a>
          </h4>
        </div>
        <div id="formCat4Files" class="panel-collapse collapse" role="tabpanel" aria-labelledby="formCat4">
            <a href="files/Buyer Select/SAMS-1103_Request_to_wire.pdf" target="_blank">Wire Transfer Form (SAMS 1103)</a>
            <a href="files/Buyer Select/Atlanta-POST-Closing-Check-Sheet1.pdf" target="_blank">Post Closing Check Sheet</a>
            <a href="files/Buyer Select/Closing-FAQs-1.pdf" target="_blank">Closing FAQs</a>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="formCat5">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#forms" href="#formCat5Files" aria-expanded="false" aria-controls="formCat5Files">
              FSM Utility Activation Request Forms
            </a>
          </h4>
        </div>
        <div id="formCat5Files" class="panel-collapse collapse" role="tabpanel" aria-labelledby="formCat5">
            Provided courtesy of HUD’s Field Services Managers. We do not guarantee accuracy of FSM utility forms and links.
            <a href="https://www.prescientfsm.com/pkform.aspx" target="_blank">4A – PK Management Group</a>
            <a href="http://www.a2zfieldservices.com/utilityactivation.aspx" target="_blank">7A – A2Z</a>
            <a href="http://www.cwis-llc.com/lenders-bankers-re" target="_blank">8A – CWIS</a>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="formCat6">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#forms" href="#formCat6Files" aria-expanded="false" aria-controls="formCat6Files">
              Other Forms
            </a>
          </h4>
        </div>
        <div id="formCat6Files" class="panel-collapse collapse" role="tabpanel" aria-labelledby="formCat6">
            <a href="files/Other Forms/Buyer-Select-Closing-Agent-Form.pdf" target="_blank">Buyer Select Closing Agent Form</a>
            <a href="files/Other Forms/LBP-Addendum.pdf" target="_blank">LBP Addendum</a>
            <a href="files/Other Forms/203k-Rehabilitation-Financing-Lead-Agreement-HUD-9548-G.pdf" target="_blank">203(k) Rehabilitation Financing Lead Agreement – HUD-9548-G</a>
            <a href="files/Other Forms/Owner-Occupant-Certification.pdf" target="_blank">Owner Occupant Certification</a>
            <a href="files/Other Forms/EXTENSION-REQUEST-FORM-July-2016.pdf" target="_blank">Extension Request Form</a>
            <a href="files/Other Forms/Atlanta-Amendments-Contract-Cancellation-Form-1.pdf" target="_blank">Contract Cancellation Form</a>
            <a href="files/Other Forms/Vandalism-Change-in-Condition-Report.pdf" target="_blank">Report Vandalism/Change in Condition</a>
        </div>
      </div>
    </div>
    <p class="text-muted">
        To view, complete, and print fillable forms you will need to use Adobe Acrobat Reader, Standard, or Pro 9.0 (or later). Adobe Acrobat Reader is available for free and can be downloaded from the following web site: <a href="http://get.adobe.com/reader/" target="_blank">Adobe Reader</a>. Google Chrome and Firefox use built in PDF viewers that are not supported for use with the fillable forms.
    </p>
</div>

<!-- Load footer -->
<?php include WEB_ROOT . "footer.php"; ?>

<!-- Site JavaScript  -->
<?php require_once WEB_ROOT . "includes/js.php"; ?>
<!-- /Site JavaScript -->

</body>
</html>
