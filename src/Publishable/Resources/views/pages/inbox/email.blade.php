@extends(config('temail.views.layouts.master'))
@section('page_content_header')
    @include(config('temail.views.pages.partials.search'))
@endsection
@section('content')
<div class="col-md-12">
      <div class="panel panel-white">
          <div class="panel-body mailbox-content">

              <div class="message-header">
                  <h3><span>Subject:</span> {{$data['email']->subject}}</h3>
                  <p class="message-date">{{$data['email']->date}}</p>
              </div>
              <div class="message-sender">
                  <img src="{{ asset('assets/images/avatar2.png')}}" alt="">
                  <p>{{$data['email']->fromName ? $data['email']->fromName : $data['email']->headers->sender['0']->mailbox }} <span>&lt;{{$data['email']->fromAddress}}&gt;</span></p>
              </div>
              <div class="message-content">
                  <div class="row">
                      @if(isset($data['email']->textHtml))
                          <?php print_r($data['email']->textHtml);?>
                      @else
                          <?php print_r($data['email']->textPlain);?>
                      @endif
                  </div>
              </div>
              <div class="message-attachments">
                  <p><i class="fa fa-paperclip m-r-xs"></i>2 Attachments - <a href="#">View all</a> | <a href="#">Download all</a></p>
                  <div class="message-attachment">
                      <a href="#">
                          <div class="attachment-content">
                              <img src="{{asset('assets/images/attachment1.jpg')}}" alt="">
                          </div>
                          <div class="attachment-info">
                              <p>Attachment1.jpg</p>
                              <span>444 KB</span>
                          </div>
                      </a>
                  </div>
                  <div class="message-attachment">
                      <a href="#">
                          <div class="attachment-content">
                              <img src="{{asset('assets/images/attachment2.jpg')}}" alt="">
                          </div>
                          <div class="attachment-info">
                              <p>Attachment2.jpg</p>
                              <span>548 KB</span>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="message-options pull-right">
                  <a href="compose.html" class="btn btn-default"><i class="fa fa-reply m-r-xs"></i>Reply</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-arrow-right m-r-xs"></i>Forward</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-print m-r-xs"></i>Print</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-exclamation-circle m-r-xs"></i>Spam</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-trash m-r-xs"></i>Delete</a>
              </div>
          </div>
      </div>
  </div>
@endsection
