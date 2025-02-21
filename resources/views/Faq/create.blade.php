@extends('layouts.master')
@section('title', 'Faq')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') | Pharmacy College Management</title>
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" />
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

@endsection

@section('content')
@component('components.breadcrumb')
    @slot('li_1') Faq  @endslot
    @slot('title') Faq @endslot
@endcomponent

<div class="row">
    <!-- Notices Table -->
    <div class="col-12 col-md-7">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Faq</h4>
            </div>
            <div class="card-body">
               
                    <!-- FAQs Table Section -->
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>FAQ Question</th>
                                    <th>FAQ Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="faqTableBody">
                            @foreach($faqs as $index => $faq)
    <tr class="faq-row">
    <td>{{ $faqs->firstItem() + $index }}</td>

        <td>{{ $faq->faq_question }}</td>
        <td>
        <button type="button" class="btn btn-sm btn-info viewAnswer" 
                data-answer="{{ $faq->faq_answer }}">
                <i class="fas fa-eye"></i>
            </button>
            </td>
        <td>
            <button type="button" class="btn btn-sm btn-primary editBtn"  
                data-id="{{ $faq->id }}"  
                data-question="{{ $faq->faq_question }}"  
                data-answer="{{ $faq->faq_answer }}">Edit</button> 

            <button class="btn btn-danger btn-sm deleteDocument mt-2" data-id="{{ $faq->id }}">Delete</button>
        </td>
    </tr>
@endforeach

                            </tbody>
                        </table>
                        <div class="pagination-wrapper">
                    {{ $faqs->links('pagination::bootstrap-4') }}
                </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Add New FAQ Section -->
    <div class="col-12 col-md-5">
    <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Faq</h4>
            </div>
            <div class="card-body">
        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <div id="faqContainer">
                <div class="faq-row d-flex align-items-start mb-3">
                    <div class="w-45 me-2">
                        <label class="form-label">FAQ Question <span class="text-danger">*</span></label>
                        <input type="text" name="faq_question[]" class="form-control @error('faq_question.*') is-invalid @enderror" value="{{ old('faq_question.0') }}">
                        @error('faq_question.*')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="w-45 me-2">
                        <label class="form-label">FAQ Answer <span class="text-danger">*</span></label>
                        <textarea name="faq_answer[]" class="form-control @error('faq_answer.*') is-invalid @enderror" rows="2">{{ old('faq_answer.0') }}</textarea>
                        @error('faq_answer.*')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-success addRow mt-4">+</button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editFaqModal" tabindex="-1" role="dialog" aria-labelledby="editFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFaqModalLabel">Edit FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="editFaqForm" method="POST">
                    @csrf
                    <input type="hidden" id="faq_id">
                    <div class="form-group">
                        <label>Question</label>
                        <input type="text" class="form-control" id="faq_question">
                    </div>
                    <div class="form-group">
                        <label>Answer</label>
                        <textarea class="form-control" id="faq_answer" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary updateFaq mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="answerModal" tabindex="-1" aria-labelledby="answerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="answerModalLabel">FAQ Answer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body" id="faqAnswerContent">
                <!-- Answer will be inserted here -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.viewAnswer').on('click', function() {
            var answer = $(this).data('answer'); 
            $('#faqAnswerContent').text(answer); 
            $('#answerModal').modal('show'); 
        });
    });
</script>
<script>
    $(document).ready(function() {
    // Open Edit Modal
    $('.editBtn').click(function() {
        let id = $(this).data('id');
        let question = $(this).data('question');
        let answer = $(this).data('answer');

        $('#faq_id').val(id);
        $('#faq_question').val(question);
        $('#faq_answer').val(answer);
        $('#editFaqModal').modal('show');
    });

    // Update FAQ
    $('.updateFaq').click(function() {
        let id = $('#faq_id').val();
        let question = $('#faq_question').val();
        let answer = $('#faq_answer').val();
        let token = $('input[name=_token]').val();

        $.ajax({
            url: '{{ route('faq.update', '') }}/' + $('#faq_id').val(),
            type: "PUT",
            data: {
                _token: token,
                faq_question: question,
                faq_answer: answer,
            },
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Faq updated successfully!',
                    confirmButtonText: 'OK'
                }).then(function() {
                    // Reload the page after the user clicks 'OK'
                    location.reload();
                });
                            } else {
                    alert("Error updating FAQ!");
                }
            }
        });
    });
});

</script>
<script>
$(document).ready(function(){
    // Add new FAQ row
    $(".addRow").click(function(){
        var row = `
            <div class="faq-row d-flex align-items-start mb-3">
                <div class="w-45 me-2">
                    <label class="form-label">FAQ Question <span class="text-danger">*</span></label>
                    <input type="text" name="faq_question[]" class="form-control">
                    <div class="invalid-feedback d-none">FAQ Question is required.</div>
                </div>

                <div class="w-45 me-2">
                    <label class="form-label">FAQ Answer <span class="text-danger">*</span></label>
                    <textarea name="faq_answer[]" class="form-control" rows="2"></textarea>
                    <div class="invalid-feedback d-none">FAQ Answer is required.</div>
                </div>

                <button type="button" class="btn btn-danger removeRow mt-4">-</button>
            </div>
        `;
        $("#faqContainer").append(row);
    });

    // Remove FAQ row
    $(document).on("click", ".removeRow", function(){
        $(this).closest(".faq-row").remove();
    });
});
</script>



<script>
    $(document).ready(function () {
      

        // Delete Document
        $(document).on('click', '.deleteDocument', function () {
            var id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('faq.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Faq  has been deleted.',
                                    'success'
                                );
                                location.reload();
                            }
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
