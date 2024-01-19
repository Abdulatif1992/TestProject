<div class="offset-1 col-10">
    @if($currentStep===1)
        <div class="row">
            <div class="col-sm-5">
                <p><b>{{$currentStep}}/{{$total_steps}}</b>     Job post</p>

                <h1>Let's start with a strong title. </h1>
                <p>This helps your job post stand out to the right candidates. It's the first thing they will see, so make it count!</p>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">
                <p><b>Write a title for your job</b></p>

                <input wire:model="job_title" type="text" class="form-control">
                @error('job_title')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <p><b>Example</b></p>
                <ul>
                    <li>Build responsive Wordpress site with booking/payment functionality</li>
                    <li>Graphic designer needed to design ad creative for multiple campaigns</li>
                    <li>Facebook ad specialist needed for product launch</li>
                </ul>
            </div>
        </div>
    @elseif($currentStep===2)
        <div class="row">
            <div class="col-sm-5">
                <p><b>{{$currentStep}}/{{$total_steps}}</b>     Job post</p>

                <h1>What are the main skills required for your work? </h1>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">
                <p><b>Search or add up to 10 skills</b></p>

                <input wire:model="skills" type="text" class="form-control">
                @error('skills')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <p><b>For the best result, add 3-5 skills</b></p>

            </div>
        </div>
    @elseif($currentStep===3)
        <div class="row">
            <div class="col-sm-5">
                <p><b>{{$currentStep}}/{{$total_steps}}</b>     Job post</p>

                <h1>Next, estimate the scope of your work. </h1>
                <p>These aren't final answer, but this information helps us recommend the right talent for what you need.</p>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">
                <div class="form-check">
                    <input wire:model="estimate" type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><h4>Large</h4>
                    <label class="form-check-label" for="radio1">Longer term or complex initatives(ex. design and build a full website)</label>
                </div>
                <div class="form-check">
                    <input wire:model="estimate"  type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"><h4>Medium</h4>
                    <label class="form-check-label" for="radio2">Well-defined projects(ex. a landing page)</label>
                </div>
                <div class="form-check">
                    <input wire:model="estimate"  type="radio" class="form-check-input" value="option3"><h4>Small</h4>
                    <label class="form-check-label">Quick and staightforward tasks (ex. update text and images on a webpage)</label>
                </div>

                @error('estimate')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
        </div>
    @elseif($currentStep===4)
        <div class="row">
            <div class="col-sm-5">
                <p><b>{{$currentStep}}/{{$total_steps}}</b>     Job post</p>

                <h1>Tell us about your budget. </h1>
                <p>This will help us mutch you to talent within your range.</p>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="budgetfrom" class="form-label"><b>From</b></label>
                        <br>
                        <div style="width: 80%; float: left"><input wire:model="budgetfrom" type="text" class="form-control"></div>
                        /hr
                        <br>
                        <div>
                            @error('budgetfrom')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-5">
                        <label for="budgetto" class="form-label"><b>To</b></label>
                        <br>
                        <div style="width: 80%; float: left"><input wire:model="budgetto" type="text" class="form-control"></div> /hr
                        <br>
                        @error('budgetto')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>

            </div>
        </div>
    @elseif($currentStep===5)
        <div class="row">
            <div class="col-sm-5">
                <p><b>{{$currentStep}}/{{$total_steps}}</b>     Job post</p>

                <h1>Start the conversation </h1>
                <p>Talent are looking for:</p>
                <ul>
                    <li>Clear expectations about your task or deliverables</li>
                    <li>The skills required for youwork</li>
                    <li>Good communication</li>
                    <li>Details about how you or your team like to work</li>
                </ul>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">
                <p><b>Describe what you need</b></p>

                <div class="form-outline">
                <textarea class="form-control" id="textAreaExample2" rows="8" wire:model="discription"></textarea>
                <label class="form-label" for="textAreaExample2">Message</label>
                </div>
                @error('discription')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <p>Need help?</p>
                <p><b>See examples of effective descriptions</b></p>

            </div>
        </div>
    @endif
    @if($currentStep>1)
    <button  wire:click="decrementSteps" class="btn btn-primary">Previous</button>
    @endif
    @if($currentStep<$total_steps)
    <button wire:click="incrementSteps" class="btn btn-primary">Next</button>
    @endif
    @if($currentStep===$total_steps)
    <button wire:click="submit" class="btn btn-success">Submit</button>
    @endif
</div>
