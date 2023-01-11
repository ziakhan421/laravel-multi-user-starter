<!-- Modal -->
<div class="modal fade" id="viewNoti" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="modelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelLabel">Notification Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-unstyled p-0 m-0">
                    <li class="d-flex flex-md-row flex-column py-3 px-2">
                        <div class="fw-bold col-12 col-md-3">Subject:</div>
                        <div id="subjectValue" class="ms-3"></div>
                    </li>
                    <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                        <div class="fw-bold col-12 col-md-3 font-medium">Message:</div>
                        <div id="messageValue" class="ms-3 text-justify"></div>
                    </li>
                    <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                        <div class="fw-bold col-12 col-md-3 font-medium">Date:</div>
                        <div id="dateValue" class="ms-3"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
