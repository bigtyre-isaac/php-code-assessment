# Coding excercise
-------------------
This is intended to be a fairly simple excercise to check basic PHP/coding skills. The goal is to produce a form which collects feedback from a customer in response to a survey they have completed. Survey responses have been saved to a MySQL database. Customers will be sent a link which includes an alphanumeric code that uniquely identifies their survey response. They can then use the form to submit a testimonial and provide their postal address. This is based on a real-world example that our business faced, but has been simplified to reduce the time required to provide a solution.

I will be checking that the script correctly:

- Gets the code from the input parameters
- Collects testimonial text and postal address from the user via a form
- Returns a 'not found' message if the code does not match a survey in the table
- Returns a thank you message if followup has already been completed for the survey
- Ensures that the testimonial text and postal address are not empty before saving
- Displays a validation message for each empty field
- Updates the matching row in the database with the testimonial text, postal address and current time
- Displays a thank you message after a valid form is submitted

I am not concerned with the final appearance of the form. You do not need to concern yourself with styling the elements, however I have provided a basic CSS file with a validation error class and some basic default styles.