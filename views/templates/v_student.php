<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Student Details </h2>

                <?php echo validation_errors();?>

                <?php echo form_open('student/key_in') ?>
            
                    <label for="id">ID</label>
                    <input type="input" name="id" /><br />

                    <label for="f_name">First Name</label>
                    <input type="input" name="f_name" /><br />
                    
                    <label for="l_name">Last Name</label>
                    <input type="input" name="l_name" /><br />
                    
                    <?php $programme_option = array(
                        'ICT' => 'Information & Communication Technology',
                        'BIS' => 'Business & Information System',
                        'ME' => 'Mechanical Engineering',
                        'PE' => 'Petroleum Engineering',
                        'CV' => 'Civil Engineering',
                        'CE' => 'Chemical Engineering',
                        'EE' => 'Electrical & Electronic Engineering',
                        'PG' => 'Petroleum Geoscience',
                    );                 
                    ?>
                    
                    <label for="programme">Programme</label>
                    
                    <?php echo form_dropdown('Programme', $programme_option, 'ICT');?>
                    <br/>

                    <label for="course">Course</label>
                    <input name="course"></input><br/>
                    
                    <br>
                    <br>
                    <!-- scores -->
                    
                    <label for="test1">Test 1</label>
                    <input name="test1"></input><br />
                    
                    <label for="test2">Test 2</label>
                    <input name="test2"></input><br />
                    
                    <label for="quiz1">Quiz 1</label>
                    <input name="quiz1"></input><br />
                    
                    <label for="quiz2">Quiz 2</label>
                    <input name="quiz2"></input><br />
                    
                    <label for="assignment1">Assignment 1</label>
                    <input name="assignment1"></input><br />
                    
                    <label for="project">Project</label>
                    <input name="project"></input><br />
                    
                    
                    
                    

                    <input type="submit" name="submit" value="Submit Score" />

                </form>
        </div>
       
    </div>
</div>