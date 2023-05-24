<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
         <img src="{{asset('front/icon.svg')}}">
    <form action="{{route('join.store')}}" method="POST">
      @method('POST')
      @csrf
      <div class="formbold-input-wrapp formbold-mb-3">
        <label for="firstname" class="formbold-form-label"> Name </label>
        <input
            type="text"
            name="name"
            id="name"
            placeholder="Full Name"
            class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-3">
        <label for="dob" class="formbold-form-label"> Date of Birth </label>
        <input type="date" name="birthdate" id="dob" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-3">
        <label class="formbold-form-label">Gender</label>

        <select class="formbold-form-input" name="gender" id="occupation">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>

      <div class="formbold-mb-3">
        <label for="email" class="formbold-form-label"> Email </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="example@email.com"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label"> Address </label>

        <input
          type="text"
          name="address"
          id="address"
          placeholder="Street address"
          class="formbold-form-input formbold-mb-3"
        />
      </div>
      <div class="formbold-mb-3">
        <label class="formbold-form-label">Select Course</label>
        <select class="formbold-form-input" name="course_id" id="occupation">
          @foreach($course as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
          @endforeach
        </select>
      </div>
      <div class="formbold-mb-3">
        <label class="formbold-form-label">Select Teacher</label>
        <select class="formbold-form-input" name="teacher_id" id="occupation">
          @foreach($teacher as $key=>$val)
            <option value="{{$key}}">{{$val}}</option>
          @endforeach
        </select>
      </div>
      <div class="formbold-checkbox-wrapper">
        <label for="supportCheckbox" class="formbold-checkbox-label">
          <div class="formbold-relative">
            <input
              type="checkbox"
              id="supportCheckbox"
              class="formbold-input-checkbox"
            />
            <div class="formbold-checkbox-inner">
              <span class="formbold-opacity-0">
                <svg
                  width="11"
                  height="8"
                  viewBox="0 0 11 8"
                  class="formbold-stroke-current"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M8.81868 0.688604L4.16688 5.4878L2.05598 3.29507C1.70417 2.92271 1.1569 2.96409 0.805082 3.29507C0.453266 3.66742 0.492357 4.24663 0.805082 4.61898L3.30689 7.18407C3.54143 7.43231 3.85416 7.55642 4.16688 7.55642C4.47961 7.55642 4.79233 7.43231 5.02688 7.18407L10.0696 2.05389C10.4214 1.68154 10.4214 1.10233 10.0696 0.729976C9.71776 0.357624 9.17049 0.357625 8.81868 0.688604Z"
                    fill="white"
                  />
                </svg>
              </span>
            </div>
          </div>
          I agree to the defined
          <a href="#"> terms, conditions, and policies</a>
        </label>
      </div>

      <button class="formbold-btn">Submit</button>
    </form>
  </div>
</div>
<style>
    
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
font-family: 'Inter', sans-serif;
}
.formbold-mb-3 {
margin-bottom: 15px;
}
.formbold-relative {
position: relative;
}
.formbold-opacity-0 {
opacity: 0;
}
.formbold-stroke-current {
stroke: #ffffff;
z-index: 999;
}
#supportCheckbox:checked ~ div span {
opacity: 1;
}
#supportCheckbox:checked ~ div {
background: #6a64f1;
border-color: #6a64f1;
}

.formbold-main-wrapper {
display: flex;
align-items: center;
justify-content: center;
padding: 48px;
}

.formbold-form-wrapper {
margin: 0 auto;
max-width: 570px;
width: 100%;
background: white;
padding: 40px;
}

.formbold-img {
display: block;
margin: 0 auto 45px;
}

.formbold-input-wrapp > div {
display: flex;
gap: 20px;
}

.formbold-input-flex {
display: flex;
gap: 20px;
margin-bottom: 15px;
}
.formbold-input-flex > div {
width: 50%;
}
.formbold-form-input {
width: 100%;
padding: 13px 22px;
border-radius: 5px;
border: 1px solid #dde3ec;
background: #ffffff;
font-weight: 500;
font-size: 16px;
color: #536387;
outline: none;
resize: none;
}
.formbold-form-input::placeholder,
select.formbold-form-input,
.formbold-form-input[type='date']::-webkit-datetime-edit-text,
.formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
.formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
.formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
color: rgba(83, 99, 135, 0.5);
}

.formbold-form-input:focus {
border-color: #6a64f1;
box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
}
.formbold-form-label {
color: #536387;
font-size: 14px;
line-height: 24px;
display: block;
margin-bottom: 10px;
}

.formbold-checkbox-label {
display: flex;
cursor: pointer;
user-select: none;
font-size: 16px;
line-height: 24px;
color: #536387;
}
.formbold-checkbox-label a {
margin-left: 5px;
color: #6a64f1;
}
.formbold-input-checkbox {
position: absolute;
width: 1px;
height: 1px;
padding: 0;
margin: -1px;
overflow: hidden;
clip: rect(0, 0, 0, 0);
white-space: nowrap;
border-width: 0;
}
.formbold-checkbox-inner {
display: flex;
align-items: center;
justify-content: center;
width: 20px;
height: 20px;
margin-right: 16px;
margin-top: 2px;
border: 0.7px solid #dde3ec;
border-radius: 3px;
}

.formbold-form-file {
padding: 12px;
font-size: 14px;
line-height: 24px;
color: rgba(83, 99, 135, 0.5);
}
.formbold-form-file::-webkit-file-upload-button {
display: none;
}
.formbold-form-file:before {
content: 'Upload';
display: inline-block;
background: #EEEEEE;
border: 0.5px solid #E7E7E7;
border-radius: 3px;
padding: 3px 12px;
outline: none;
white-space: nowrap;
-webkit-user-select: none;
cursor: pointer;
color: #637381;
font-weight: 500;
font-size: 12px;
line-height: 16px;
margin-right: 10px;
}

.formbold-btn {
font-size: 16px;
border-radius: 5px;
padding: 14px 25px;
border: none;
font-weight: 500;
background-color: #6a64f1;
color: white;
cursor: pointer;
margin-top: 25px;
}
.formbold-btn:hover {
box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
}

.formbold-w-45 {
width: 45%;
}
</style>