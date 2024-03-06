my_testimonial.info.yml: Similar to the previous examples, 
updated with the autoload section specifying the src folder 
for autoloading.
src/Entity/Testimonial.php: Defines the Testimonial entity class 
extending ContentEntityBase. It includes code for defining base fields, 
pre-creation logic, and entity type information.
src/Testimonial.module - optional - : Similar to the previous examples, 
it defines hooks for creating the "testimonial" bundle and avoids 
defining field information again, relying on the Testimonial class 
definition.