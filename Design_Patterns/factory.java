interface Shape {
	void calculateArea();
}

/*Classes to implement the Shape Interface*/
class Circle implements Shape {
	private float radius;

	public Circle(float radius) {
		this.radius = radius;
	}

	public void calculateArea() {
		System.out.println("Area of Circle is: " + (22 * radius * radius)/7);
	}
}

class Rectangle implements Shape {
	private float length, width;

	public Rectangle(float length, float width) {
		this.length = length;
		this.width = width;
	}

	public void calculateArea() {
		System.out.println("Area of Rectangle is: " + (length * width));
	}
}

class Triangle implements Shape {
	private float base, height;

	public Triangle (float base, float height) {
		this.base = base;
		this.height = height;
	}

	public void calculateArea(){
		System.out.println("Area of Triangle is: " + (base * height)/2);
	}
}

/*Factory class to access the three classes above and calculate the area*/
class ShapeFactory {
	private float length, width;

	public ShapeFactory( float width, float length) {
		this.width = width;
		this.length = length;
	}

	public Shape getShape(int shapeId) {
		if (shapeId == 1) {
			return new Circle(this.width);
		}else if (shapeId == 2) {
			return new Rectangle(this.length, this.width);
		}else {
			return new Triangle(this.length, this.width);
		}
	}
}

/*Class the the User interact with. The user will interact with 
this FactoryDemo class while using the ShapeFactory class which
selects the specific class to instantiate based on the shapeID
passed
*/
public class FactoryDemo {
	public static void main(String [] args) {
		ShapeFactory shapeFactory = new ShapeFactory(7, 10);

		Shape shape1 = shapeFactory.getShape(1);
		shape1.calculateArea();

		Shape shape2 = shapeFactory.getShape(2);
		shape2.calculateArea();

		Shape shape3 =shapeFactory.getShape(3);
		shape3.calculateArea();
	}
}











































