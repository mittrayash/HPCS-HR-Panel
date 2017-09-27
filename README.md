# HPCS HR Panel
An extensive HR Panel which incorporates all the basic manegerial tasks like Employee Attendance Checker, Employee Management etc.
```
Please refer to the file "HPCS Panel Info.pdf" for a more exhaustive and comprehensive report on the project
including the testing breakdown. You may also refer to "Hpcs HR Panel.pptx" for a concise and succinct 
presentation on the same.

In any case, I am going to post some of it here: 
```
## A More Formal Introduction
__HPCS HR Panel (Web App)__ is the go to portal for the Human Resources Manager to keep statistical
analysis of all the employees. This makes the daily tasks of the HR Manager easier and helps in
extracting the maximum efficiency in terms of performance as well as resourcefulness. The HR
Panel happens to be a very vigorous tool to have by your side because it helps in measuring the
processing of the employees of the company. This tool, if present at the HR’s disposal can help
him in devising plans (using the data collected) which urge to benefit the company in the short as
well as long term.  

Salient Features in Proposed System:  
  -Secure Login Panel
  -Cookies Used to Keep User Logged In
  -Secure Pages Which Can Only Be Accessed After Logging In
  -Works as an Online Portal
  -Add New/Old Employees
  -View Employees
  -Update Employee Profiles
  -Analysis of Employee Attendance
  -Checklist Kept Track of per Employee Separately
  -Idiot Proof Code
  -Passwords Protected in Hashed Format
  -Planned Events and Schedules Imposed on Databases  
  
**HPCS HR Panel** is developed using HTML, CSS, JavaScript, jQuery and Bootstrap as frontend
and SQL, AJAX and PHP as Backend. The peculiarities of the project are elucidated upon in the
further upcoming chapters.

## Technologies Used:  

![Technologies](/ReadmeImages/Techno.png)  

![List of Tables](/ReadmeImages/1.png)

![Contents](/ReadmeImages/2.png)  
  

## HPC Sphere HR Panel

The HPC Sphere HR Panel is a specialized web engine that incorporates a handful of essential
aspects to the working of an HR Manager. Part of the HR Manager’s job is to evaluate the
workers and develop methodologies to differentiate between them when it comes to their
performance reviews. Keeping the same in mind, the HPC Sphere HR Panel provides the HR
Manager with extensive and statistical tool in the form of an online engine.  
The web engine incorporates a number of features which have been discussed in the following
sections of this document. The website also uses MD5 hashing to secure the passwords that are
hence checked every time by converting the user’s password input to MD5 version and henceforth
checking against the original password’s MD5. A lot of other security features such as timeout as
well as securing of access of webpages through bare links by an infiltrator have been taken care of.  

### Salient Features of the HPC Sphere HR Panel
  - Secure Login Panel
  - Cookies Used to Keep User Logged In
  - Secure Pages Which Can Only Be Accessed After Logging In
  - Works as an Online Portal
  - Add New/Old Employees
  - View Employees
  - Update Employee Profiles
  - Analysis of Employee Attendance
  - Checklist Kept Track of per Employee Separately
  - Idiot Proof Code
  - Passwords Protected in Hashed Format
  - Planned Events and Schedules Imposed on Databases  
  
  We shall explore each of the topics in detail further.  
  
  ### Chapter 1 – The Login Panel
  
  ![login panel](/ReadmeImages/3.png)  
   *The Login Panel*  
   Above, is a picture of the login panel. Simplicity is the key to the interfacing here. The username
and the password of the HR Manager is to be entered in here. These username and password pairs
are stored in the Database named ‘hpcs_admin’. Inside this database, a table exists with the name
‘login’ which contains the data for this login verification. A simple username = “user” and
password = “pass” has been inserted into the table so that the project can be tested. Following is a
picture which shows the structure and the data in the login table. (Note that MD5 hashing of the
password has not been incorporated here since it would render the project unusable if a user fails
to remember his password or login credentials in the crude sense, unless of course the user has
knowledge of PHP and SQL).

![Cannot open image!](/ReadmeImages/4.png)  

*Structure of Table `login`*

![Cannot open image!](/ReadmeImages/5.png)  
*Data in Table `login`*  
These pictures clearly show the structure as well as the currently present data which can be used
by the tester to log into the website and access other features.  

   
 Some other features such as Change Password and Remember me have also been incorporated.
These can be seen as shown under:  
![Cannot open image!](/ReadmeImages/6.png)  
*Change Password Implementation*  
Here, the password of the user is updated through the panel into the `login` table in the
`hpcs_admin` database. Users can easily access this to change their current passwords.  

![Cannot open image!](/ReadmeImages/7.png)  
*Remember Me Implementation*
Here, on checking of this option, the user’s login credentials are saved into the local machine in the
form of cookies through which the user doesn’t get logged out (or he doesn’t need to enter the
credentials to log in, specifically every time he visits the website, the credentials will be present
there in the respective fields). The user will have to re login once he logs out and then again tried
to log in. The user will also have to re login if the session times out.  
  
  
### Chapter 2 – Inside The HR Panel  

![Cannot open image!](/ReadmeImages/8.png)  
*The HR Panel*
Inside the HR Panel, the user is redirected to the Dashboard. Here, the Header makes its first
appearance. We can see the header says HR Panel along with a simple logo of HPC Sphere on the
top left. Next, the user is identified and is Welcomed on the top right with his name. Also, a Log
Out button can be seen on the bottom right of the header.  
  

Next, we note that a Navbar has been provided to the HR Manager so that he can easily browse
through the website without searching for a website map at each step. The navbar is adjustable and
can be hidden by clicking on the left arrow glyphicon that can be seen on the mid right portion of
the navbar. Once hidden, it can again be resuscitated by clicking on the right arrow arrow button
which shows as soon as the user places his mouse to the left most part of the screen. The Navbar
incorporated several Menus and Sub Menus, each of which we will see in the upcoming chapters.
The following pictures show the hiding property of the Navbar.  

![Cannot open image!](/ReadmeImages/9.png)   
*Collapsibility feature*  
The next stage is shown in the next picture.  

![Cannot open image!](/ReadmeImages/10.png)  
*Restore Navbar Button*  
The navbar can be restored by clicking the right arrow glyphicon.  

### Chapter 3 – Adding New & Old Employees  

![Cannot open image!](/ReadmeImages/11.png)  
*The Employees Menu*  
On hovering over the `Employees` section on the Navbar, the submenu items show up. The first
item in this menu is Add Employee. On clicking on this menu, the following menu shows up.  


![Cannot open image!](/ReadmeImages/12.png)  
The menu consists of several sections of scroll down menus. These can be opened up by clicking
on them. The following happens on clicking on `Basic Details`.  

![Cannot open image!](/ReadmeImages/13.png)  
*Basic Details (Enlarged)*  
The red asterisk denotes that the fields must be filled for an employee to be added to the database.
In other words, these fields are mandatory fields. We will see each of the subsections enlarged after
taking a short detour to the `Copy to Clipboard` button.  
This button copies the credentials in a string for further use by the HR Manager. A sample can be
seen below:  

![Cannot open image!](/ReadmeImages/14.png)  
These credentials are now copied to clipboard. We shall paste the output below:  
```
Employee ID: HPCS17003 |Official Email ID: NewEmail@kdd.com | Official Email   
Password: passswiei | Skype ID: SkypeId123 | Skype Password: password | Date of  
Joining: 2017-09-29  
```
Next, all of the other subsections have been pictured as below:  
![Cannot open image!](/ReadmeImages/15.png)  
This is the general details section (expanded). The general details as seen above can be entered in
the pertinent fields here. Also, a picture can be uploaded here.  
![Cannot open image!](/ReadmeImages/16.png)  
*Personal Details Section*  
  
![Cannot open image!](/ReadmeImages/17.png)  
*Important Dates (Expanded)*  

![Cannot open image!](/ReadmeImages/18.png)  
*Contact Details (Expanded)*   

![Cannot open image!](/ReadmeImages/19.png)  
*Banking Details (Expanded)*  
![Cannot open image!](/ReadmeImages/20.png)  
*Education Details (Expanded)*  

![Cannot open image!](/ReadmeImages/21.png)  
*Salary Details (Expanded)*  
This concludes our overview to adding a new employee. Note that the employee ID is auto
generated depending upon the employee’s year of adding and the number of employees already
added in that year.  
Thus, to add an old employee to the database, select the ‘Old Employee’ bullet on top of the form.
This gives us an additional option of selecting the year of addition of an employee through which
an algorithm calculates the proper Employee ID for the employee. This can be shown as follows:  

![Cannot open image!](/ReadmeImages/22.png)  
Note that changing the year will automatically auto generate a new Employee ID as per that year
and the number of employees from that year.  

### Chapter 4 – Viewing Employees  

  ![Cannot open image!](/ReadmeImages/23.png)   
  
Two different methodologies to view the employee have been implemented. The first one shows the employees in a jQuery Datatable without the employee image.   
The second one shows the employee details in the jQuery data table with the images of the employees. This can be very crucial at times when bulk number of employees are kept track of and at times viewing their photos falls out of context or purpose.  

 
![Cannot open image!](/ReadmeImages/24.png)  
*View Employees (Without Image)*  

![Cannot open image!](/ReadmeImages/25.png)  
*View Employees (With Image)*  

 
Here, mainly, the data has been fetched from the database and all the employees with their data have been arranged into rows, which the HR Manager can access without procuring the knowledge of any kind of DBMS or SQL.  

### Chapter 5 – Updating Employee Details  

![Cannot open image!](/ReadmeImages/26.png) 
*Update Employee Portal*  

Here, the HR Manager can update any employee’s details. The employee ID is entered which is bound to be shown up using AutoSuggest functionality that has been implemented here.  

![Cannot open image!](/ReadmeImages/27.png)  
*If no such user exists*  

![Cannot open image!](/ReadmeImages/28.png)  

*Auto Suggest*  
![Cannot open image!](/ReadmeImages/29.png)  
*Update Employee Portal*  
The details of the employee are already present in the respective fields. The employee’s profile can be updated by changing these fields and clicking update at the bottom of the panel.  

![Cannot open image!](/ReadmeImages/30.png)  
The employee attendance can be checked for any month by checking the employee attendance option in the Employees sub-menu. A drop down appears in which the year and the month needs to be selected for viewing the employee attendances.  

![Cannot open image!](/ReadmeImages/31.png)  
*Employee Attendance Table*  

In this table, all of the employees with their attendance can be seen accordingly. All of this data is to be stored in the database through the attendance portal every day when the employee arrives at work.  

### Chapter 7 – Employee Checklists  

![Cannot open image!](/ReadmeImages/32.png)  
Employee Checklist is essentially a list of things that the company needs to attend to for every employee. For instance, providing the employee with a laptop, a notebook, a pen, adding him to the skype group, etcetera. This is also kept track of by the HR Manager through the HPC Sphere HR Panel. First, each and every employee’s checklist is automatically accounted for every time an employee is added to the database. His checklist needs to be completed to change the overall checklist status to ‘Complete’ from ‘Pending’. This is done using MSQL Events. If the checklist has all of the statuses completed, the overall status of the checklist is set to ‘Complete’. This overall status can be seen in the Checklists menu > View Checklist’s Status. 
  
The following depicts the same:  

![Cannot open image!](/ReadmeImages/33.png)  
*View Employee Checklist’s Status*  
  
  Finally, the checklists will be updated through the update checklists page. This can be reached from the Checklists Menu > Update Checklists option.  
  
The following is a sample from the same page:   

![Cannot open image!](/ReadmeImages/34.png)  

### Chapter 8 – Employee Payroll  
  
  
![Cannot open image!](/ReadmeImages/35.png) 
*View Payroll*  
Finally, the HR Manager can view the Employees’ payroll through this page. Again, the Employee ID can be put in using auto suggest, and the pertinent employee payroll details will show up using AJAX.  

![Cannot open image!](/ReadmeImages/36.png)  
*Auto Suggest*  
![Cannot open image!](/ReadmeImages/37.png)    
*If Employee doesn’t exist*  
![Cannot open image!](/ReadmeImages/38.png)   
*Payroll Details of Employee*  


### Conclusion

To sum up, the HPC Sphere HR Panel can be an indespensable part of any company by helping out the HR Manager in uncountable ways. It helps the manager analyze the workers to a much better extent through which he can decide which employee has been the most valuable to the company, and on the contrary, which employee has been of negligible or derogratory influence to the company. Through these records, the HR Manager can also keep track of all the information that is to be kept about any employee rather than making notes or storing the same in a file processing structure. The HR Panel forms a very crucial part of any organisation and I believe, it can help boost the organisation’s objectives as well as encourage the employees to work harder at the same time.  

  
  
### References/Bibliography
The following websites were referred during the study and development of this project:  

•	www.tutorialspoint.com
•	www.stackoverflow.com
•	www.w3schools.com




