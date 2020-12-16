<div class="form-group">
                {{Form::label('user_id','Select User')}}
                {{Form::select('user_id', \App\User::list(), null, 
                ['class'=>'form-control', 'placeholder'=>'Select user'])}}
            </div>
            <div class="form-group">
                {{Form::label('level','Level')}}
                {{Form::select('level',[
                        'novice' => 'Novice',                
                        'intermediate' => 'Intermediate',
                        'advanced' => 'Advanced',
                ], null, ['class'=>'form-control', 'placeholder'=>'Select level'])}}
            </div>
            <div class="form-group">
                {{Form::label('status','Status')}}
                {{Form::select('status',[
                        'active' => 'Active',                    
                        'inactive' => 'Inactive',
                        'suspended' => 'Suspended',
                ], null, ['class'=>'form-control', 'placeholder'=>'Select Status'])}}
            </div>
