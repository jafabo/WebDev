import random

# Function to generate a random color
def generate_random_color():
    # Generate random values for Red, Green, and Blue
    r = random.randint(0, 255)
    g = random.randint(0, 255)
    b = random.randint(0, 255)
    
    # Return the color in RGB format
    return f"rgb({r},{g},{b})"

# Print the generated color so that the PHP script can capture this output
print(generate_random_color())
