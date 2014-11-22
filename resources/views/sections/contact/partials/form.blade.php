<form class="form-horizontal contact-form" action="" method="post" role="form" id="contactForm">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group email">
        <label class="sr-only" for="email">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group message">
        <label class="sr-only" for="message">Message</label>
        <textarea name="message" class="form-control" id="msg" rows="8" placeholder="Message"></textarea>
    </div>
    <div class="pull-right">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>