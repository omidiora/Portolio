@extends('component/navbar')


@section('content')
<style>

section{
    margin-top:40px ;
    background: white;
}

</style>

<section class="resume-section p-4 p-lg-5 text-center" id="contact">
    <div class="my-auto">
      <h2 class="mb-4">&lt; Contact Information &gt;</h2>


      <form>
        <div class="form-group w-75">
          <input
            type="name"
            class="form-control"
            placeholder="Name"
            name="name"
            required
          />
        </div>
        <div class="form-group w-75">
          <input
            type="email"
            class="form-control"
            placeholder="Email"
            name="name"
            required
          />
        </div>

        <div class="form-group w-75">
          <textarea
            class="form-control"
            type="text"
            placeholder="Message"
            rows="7"
            name="name"
            required
          ></textarea>
        </div>
        <div class="form-group ">

        <button type="submit" class="btn btn-submit btn-info w-15">Submit</button>
        </div>
      </form>
    </div>
  </section>

@stop



