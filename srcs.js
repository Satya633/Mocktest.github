const mathsQuestions = [
     {
        question: "If each element of a row or column of a determinant is multiplied by a constant \\( K \\), then the value of the determinant is:",
        options: ["Added by \\( K \\)", "Multiplied by \\( K \\)", "Subtracted by \\( K \\)", "Divided by \\( K \\)"],
        answer: "B"
    },
    {
        question: "If \\( A = \\begin{bmatrix} 1 & 2 & 3 \\\\ -2 & 1 & 4 \\end{bmatrix} \\) and \\( B = \\begin{bmatrix} 2 & 3 & 1 \\\\ 5 & 4 & 2 \\\\ 1 & 5 & 3 \\end{bmatrix} \\), then \\( AB \\) is:",
        options: [
            "\\( \\begin{bmatrix} 15 & 26 & 4 \\end{bmatrix} \\)",
            "\\( \\begin{bmatrix} 15 & 26 & 14 \\\\ 5 & 18 & 12 \\end{bmatrix} \\)",
            "\\( \\begin{bmatrix} 15 & 5 \\\\ 26 & 18 \\\\ 14 & 12 \\end{bmatrix} \\)",
            "\\( BA \\)"
        ],
        answer: "B"
    },
    {
        question: "The elements on the main diagonal of a skew-symmetric matrix are all:",
        options: ["Zeros", "Ones", "Unequal", "> 1"],
        answer: "A"
    },
    {
        question: "If \\( \\omega \\) is one of the imaginary cube roots of unity, find the value of the determinant \\( \\left| \\begin{bmatrix} 1 & \\omega & \\omega^2 \\\\ \\omega & \\omega^2 & 1 \\\\ \\omega^2 & 1 & \\omega \\end{bmatrix} \\right| \\):",
        options: ["Zero", "One", "\\( \\omega^2 \\)", "\\( \\omega \\)"],
        answer: "A"
    },
    {
        question: "Every square matrix can be written as the sum of:",
        options: [
            "Diagonal matrix & square matrix",
            "Two rectangular matrices",
            "Squared and non-square matrices",
            "Symmetric and skew-symmetric matrices"
        ],
        answer: "D"
    },
    {
        question: "An improper fraction can be reduced to a proper fraction by:",
        options: ["Multiplication", "Division", "Subtraction", "Addition"],
        answer: "B"
    },
    {
        question: "Simplify: \\( \\frac{x}{(x + 2)(x - 3)} \\) =",
        options: [
            "\\( \\frac{2}{5(x + 2)} + \\frac{3}{5(x - 2)} \\)",
            "\\( \\frac{2}{5(x + 2)} - \\frac{3}{5(x - 3)} \\)",
            "\\( \\frac{2}{5(x + 2)} + \\frac{3}{5(x - 3)} \\)",
            "\\( \\frac{2}{5(x - 3)} + \\frac{3}{5(x + 2)} \\)"
        ],
        answer: "C"
    },
    {
        question: "The value of \\( \\sin 210^\\circ \\) is:",
        options: ["\\( \\frac{1}{2} \\)", "\\( -\\frac{1}{2} \\)", "\\( \\frac{1}{\\sqrt{2}} \\)", "\\( -\\frac{1}{\\sqrt{2}} \\)"],
        answer: "B"
    },
    {
        question: "\\( \\cos(n\\pi) \\) =",
        options: ["\\( -1 \\)", "\\( -n \\)", "\\( (-1)^n \\)", "\\( n^{-1} \\)"],
        answer: "C"
    },
    {
        question: "If \\( a \\neq 0 \\neq b \\), \\( \\sin(x) + \\sin(y) = a \\), \\( \\cos(x) + \\cos(y) = b \\), then \\( \\tan\\left(\\frac{x + y}{2}\\right) \\) =",
        options: ["\\( \\frac{b}{a} \\)", "\\( \\frac{a}{b} \\)", "\\( \\frac{a + b}{2} \\)", "\\( \\frac{a - b}{2} \\)"],
        answer: "B"
    },
    {
        question: "If \\( f(x) \\) is a periodic function with period \\( k \\), then the period of \\( f(ax + b) \\) is:",
        options: [
            "\\( \\frac{k}{a}, a \\neq 0 \\)",
            "\\( \\frac{ak}{|b|}, b \\neq 0 \\)",
            "\\( k + \\frac{b}{a}, a \\neq 0 \\)",
            "\\( \\frac{k}{|a|}, a \\neq 0 \\)"
        ],
        answer: "D"
    },
    {
        question: "If \\( 7\\sin^2\\theta + 3\\cos^2\\theta = 4 \\), then \\( \\theta \\) =",
        options: ["\\( \\pm \\frac{\\pi}{3} \\)", "\\( \\pm \\frac{\\pi}{6} \\)", "\\( \\pm \\frac{\\pi}{4} \\)", "\\( \\pm \\frac{\\pi}{2} \\)"],
        answer: "B"
    },
    {
        question: "The range of \\( \\cos^{-1}x \\) is:",
        options: ["\\( [0, \\pi] \\)", "\\( [-\\pi, \\pi] \\)", "\\( [0, -\\pi] \\)", "\\( (0, \\pi) \\)"],
        answer: "A"
    },
    {
        question: "Assume \\( x > 0, y > 0 \\). Which of the following is true?",
        options: [
            "If \\( xy < 1 \\), then \\( \\tan^{-1}(x) + \\tan^{-1}(y) = \\tan^{-1}\\left(\\frac{x + y}{1 - xy}\\right) \\)",
            "If \\( xy > 1 \\), then \\( \\tan^{-1}(x) + \\tan^{-1}(y) = \\tan^{-1}\\left(\\frac{x + y}{1 - xy}\\right) \\)",
            "If \\( xy = 1 \\), then \\( \\tan^{-1}(x) + \\tan^{-1}(y) = \\tan^{-1}\\left(\\frac{x + y}{1 - xy}\\right) \\)",
            "If \\( xy = 1 \\), then \\( \\tan^{-1}(x) - \\tan^{-1}(y) = \\tan^{-1}\\left(\\frac{x + y}{1 - xy}\\right) \\)"
        ],
        answer: "A"
    },
{
 "question": "In \( \Delta ABC \), \( (a+b+c)(b+c-a) = 3bc \), then angle \( A = \)",
  "options":[
  "\\( 90^\\circ \\)",
  "\\( 120^\\circ \\)",
  "\\( 60^\\circ \\)",
  "\\( 45^\\circ \\)"
],
  "answer": "C"
    },
    {
        question: "In \( \Delta ABC \), \\( \\tan\\frac{A}{2} = \\frac{5}{6}, \\tan\\frac{C}{2} = \\frac{2}{5} \\), then a, b, c are in:",
        options: ["Geometric progression", "Arithmetic progression", "Harmonic progression", "Arithmetico-Geometric progression"],
        answer: "B"
    },
    {
        question: "In any \( \Delta ABC \),, \\( \\tan\\frac{B-C}{2} = \\)",
        options: ["\\( b \\pm c \\cot\\frac{A}{2} \\)", "\\( \\frac{b-c}{b+c} \\cot\\frac{A}{2} \\)", "\\( (b-c)\\tan\\frac{A}{2} \\)", "\\( \\tan\\frac{C}{2} \\)"],
        answer: "B"
    },
    {
        question: "Conjugate of \\( \\frac{1-i}{1+i} \\) is:",
        options: ["-3i", "-i", "i", "6i"],
        answer: "C"
    },
    {
        question: "Standard form of \\((-1 + 2i) + \\left(\\frac{1}{2} - i\\right) \\) is:",
        options: ["\\( \\frac{1}{2} - i \\)", "\\( -\\frac{1}{2} + i \\)", "\\( -\\frac{1}{2} - i \\)", "\\( \\frac{1}{2} \\pm i \\)"],
        answer: "B"
    },
    {
        question: "If the circle \\( x^2 + y^2 + 6x - 8y + c = 0 \\) has radius 6 units, then value of \\( c \\) is:",
        options: ["-11", "11", "25", "6"],
        answer: "A"
    },
    {
        question: "The equation of the parabola whose focus is \\((8, 0)\\) and the vertex is \\((0, 0)\\) is:",
        options: ["\\( y^2 = 12x \\)", "\\( y^2 = x \\)", "\\( y^2 = 32x \\)", "\\( y^2 = 16x \\)"],
        answer: "C"
    },
    {
        question: "The eccentricity of the ellipse \\( x^2 + 2y^2 = 3 \\) is:",
        options: ["\\( e = \\frac{3}{\\sqrt{2}} \\)", "\\( e = \\frac{1}{\\sqrt{3}} \\)", "\\( e = -\\frac{1}{\\sqrt{2}} \\)", "\\( e = \\frac{1}{\\sqrt{2}} \\)"],
        answer: "D"
    },
    {
        question: "In this Ellipse \\( \\frac{x^2}{a^2} + \\frac{y^2}{b^2} = 1, a > b \\), the length of the latus rectum is:",
        options: ["\\( \\frac{2a^2}{b} \\)", "\\( \\frac{2b^2}{a} \\)", "\\( \\frac{2a^2}{b^2} \\)", "\\( 2ab \\)"],
        answer: "B"
    },
    {
        question: "The equation of the hyperbola with foci \\((\\pm 2, 0)\\) and eccentricity \\( \\frac{3}{2} \\) is:",
        options: [
            "\\( \\frac{9x^2}{16^2} + \\frac{9y^2}{10^2} = 1 \\)",
            "\\( \\frac{x^2}{\\frac{16}{9}} - \\frac{y^2}{\\frac{20}{9}} = 1 \\)",
            "\\( \\frac{x^2}{16^2} - \\frac{y^2}{20^2} = 1 \\)",
            "\\( \\frac{x^2}{2^2} - \\frac{y^2}{20^2} = 1 \\)"
        ],
        answer: "A"
    },
{
    question: "If the coordinates at one end of a diameter of the circle \\( x^2 + y^2 - 8x - 4y + c = 0 \\) are:",
    options: ["(5, 11)", "(6, 2)", "(2, 11)", "(11, 2)"],
    answer: "D"
},{
        question: "If \\( a > 0 \\), then \\( \\lim_{x \\to 0} \\frac{a^{x-1}}{x} = \\)",
        options: ["\\( \\log x \\)", "1", "\\( \\log a \\)", "\\( \\log \\left( \\frac{a}{x} \\right) \\)"],
        answer: "C"
    },
    {
        question: "Differentiation of \\( \\sin(x^n) \\) with respect to \\( x \\):",
        options: ["\\( nx^{n-1} \\cos(x^n) \\)", "\\( x^{n-1} \\cos(x^n) \\)", "\\( \\cos(x^n) \\)", "\\( n \\cos(x^n) \\)"],
        answer: "A"
    },
    {
        question: "\\( \\frac{d}{dx} \\left( \\sin^{-1}\\left( \\frac{x}{a} \\right) \\right) = \\)",
        options: ["\\( \\frac{1}{\\sqrt{a^2 - x^2}} \\)", "\\( \\frac{1}{\\sqrt{a^2 + x^2}} \\)", "\\( \\frac{1}{\\sqrt{x^2 - a^2}} \\)", "-\\( \\frac{1}{\\sqrt{a^2 - x^2}} \\)"],
        answer: "A"
    },
    {
        question: "\\( \\frac{d}{dx} \\left( e^{3 \\log(x)} \\right) = \\)",
        options: ["3x", "3 \\( \\log(x) \\)", "\\( \\log 3 \\)", "3x²"],
        answer: "D"
    },
    {
        question: "\\( \\frac{d}{dx} [ \\log |x| ] = \\)",
        options: ["\\( \\frac{1}{|x|} \\)", "\\( \\frac{1}{x} \\)", "|x|", "x"],
        answer: "B"
    },
    {
        question: "If \\( y = \\cos(x) \\), then\\( \\frac{d^2 y}{dx^2} = \\)",
        options: ["\\( \\cos(x) \\)", "\\( \\sin(x) \\)", "-\\( \\cos(x) \\)", "-\\( \\sin(x) \\)"],
        answer: "C"
    },
    {
        question: "The angle between the curves\\( x^2 + 4y = 0 \\) and \\( xy = 2 \\) is:",
        options: ["\\( \\tan^{-1}(3) \\)", "\\( \\cot^{-1}(1) \\)", "\\( \\tan^{-1}(4) \\)", "\\( \\cot^{-1}(3) \\)"],
        answer: "A"
    },
    {
        question: "The slope of the tangent to the curve \\( y = \\frac{x-1}{x+1} \\) at \\( (1, 0) \\) is:",
        options: ["\\( \\frac{1}{2} \\)", "-\\( \\frac{1}{2} \\)", "1", "2"],
        answer: "B"
    },
    {
        question: "If \\( z = x^2 + y^2 \\), then \\( x = \\)",
        options: ["2y - 2x", "2x + 2y", "0", "4xy"],
        answer: "C"
    },
    {
        question: "The function \\( z = \\frac{x^3 + y^3}{x + y} \\) is a homogeneous function of degree:",
        options: ["2", "3", "0", "1"],
        answer: "A"
    },
    {
        question: "The integral \\( \\int \\left( \\frac{x^2}{3} + 1 \\right) dx = \\)",
        options: ["\\( \\frac{3}{5} x^{5/3} + x + c \\)", "\\( \\frac{5}{3} x^{5/3} + x + c \\)", "\\( \\frac{3}{5} x^{5/3} + c \\)", "\\( \\frac{3}{5} x^{3/5} + x + c \\)"],
        answer: "A"
    },
    {
        question: "The integral \\( \\int \\frac{dx}{x^2 - 16} = \\)",
        options: ["\\( \\frac{1}{16} \\log \\left| \\frac{x-8}{x+4} \\right| + c \\)", "\\( \\frac{1}{4} \\log \\left| \\frac{x-4}{x+4} \\right| + c \\)", "\\( \\frac{1}{8} \\log \\left| \\frac{x-4}{x+4} \\right| + c \\)", "\\( \\frac{1}{16} \\log \\left| \\frac{x-4}{x+4} \\right| + c \\)"],
        answer: "C"
    },
    {
        question: "The integral \\( \\int \\frac{\\sin(\\tan^{-1}(x))}{1+x^2} dx = \\)",
        options: ["-cos(x) + c", "-\\( \\cos(\\tan^{-1}(x)) + c \\)", "-\\( \\sin(\\tan^{-1}(x)) + c \\)", "\\( \\tan^{-1}(x) + c \\)"],
        answer: "B"
    },
    {
        question: "The integral \\( \\int \\frac{\\cos(x)}{2} dx = \\)",
        options: ["\\( \\frac{2\\cos(x)}{2} + c \\)", "\\( \\frac{2\\sin(x)}{2} + c \\)", "\\( 2\\sin(2x) + c \\)", "-\\( \\frac{2\\sin(x)}{2} + c \\)"],
        answer: "B"
    },
    {
        question: "The integral \\( \\int e^x \\cos(x) dx = \\)",
        options: ["\\( \\frac{1}{2} e^x (\\cos(x) + \\sin(x)) + c \\)", "\\( \\frac{1}{2} e^x (\\cos(x) - \\sin(x)) + c \\)", "\\( \\frac{1}{2} e^x \\sin(x) + c \\)", "\\( \\frac{1}{2} (\\cos(x) + \\sin(x)) + c \\)"],
        answer: "A"
    },
    {
        question: "The area of the region bounded by the curve \\( y = f(x) \\), the x-axis, and the lines \\( x = a \\) and \\( x = b \\) (with \\( b > a \\)) is given by:",
        options: ["\\( \\int_a^b y \, dx \\)", "-\\( \\int_b^a y \, dx \\)", "\\( \\int_b^a x \, dy \\)", "\\( \\int_b^a y \, dx \\)"],
        answer: "D"
    },
    {
        question: "If \\( f(x) \\) is an even function, then \\( \\int_{-a}^a f(x) \, dx = \\)",
        options: ["-\\( \\int_{-a}^a f(x) \, dx \\)", "2V\\( \\int_{-a}^a f(x) \, dx \\)", "2\\( \\int_{-a}^0 f(x) \, dx \\)", "\\( \\int_{-a}^0 f(x) \, dx \\)"],
        answer: "C"
    },
    {
        question: "Find maxima (or) minima for the curve \\( y = 2x^4 - x^2 \\):",
        options: ["'y' is minimum at \\( x = \\pm \\frac{1}{2} \\)", "'y' is maximum for \\( x = -\\frac{1}{4} \\)", "'y' is maximum for \\( x = \\pm \\frac{1}{2} \\)", "'y' is maximum for \\( x = \\frac{1}{4} \\)"],
        answer: "A"
    },
    {
        question: "The order of the differential equation \\( 6y \\) is:",
        options: ["3", "2", "5", "1"],
        answer: "B"
    },
    {
        question: "The general solution of the differential equation \\( \\frac{dy}{dx} = \\frac{1 + y^2}{1 + x^2} \\) is:",
        options: ["\\( \\tan^{-1}(y) - \\tan^{-1}(x) = c \\)", "\\( \\tan^{-1}(y) + \\tan^{-1}(x) = c \\)", "\\( \\tan^{-1}(y) = c \\)", "\\( \\frac{\\tan^{-1}(y)}{x} = c \\)"],
        answer: "A"
    },
    {
        question: "The differential equation representing the family of curves \\( y = mx \\), where \\( m \\) is an arbitrary constant, is:",
        options: ["\\( \\frac{dy}{dx} - y = 0 \\)", "\\( \\frac{dy}{dx} + y = 0 \\)", "\\( x \\frac{dy}{dx} - y = 0 \\)", "None of the above"],
        answer: "C"
    },
{
        question: "Which one of the statement is true?",
        options: ["Order of differential equation is the order of lowest order derivative occurring in the differential equation", "A function which satisfies the given differentials equation is not its solution", "An equation involving derivatives of the dependent variable is known as a differential equation", "Degree of a differential equation is defined if it is a polynomial equation in its Derivatives"],
        answer: "D"
    },
{
    question: "\\( \\text{The integrating factor of the differential equation } x \\frac{dy}{dx} + 2y = x^2 \\ (\\text{where } x \\neq 0) \\text{ is} \\)",
    options: ["\\( x \\)", "\\( \\log x \\)", "\\( x \\log x \\)", "\\( x^2 \\)"],
    answer: "D"
},
{
    question: "\\( \\text{The linear form of } x \\log x \\frac{dy}{dx} + y = 2 \\log x\\text{ is} \\)",
    options: [
        "\\( \\frac{dy}{dx} - \\frac{y}{x \\log x} = \\frac{1}{x} \\)",
        "\\( \\frac{dy}{dx} + \\frac{y}{x \\log x} = \\frac{2}{x} \\)",
        "\\( \\frac{dy}{dx} + \\frac{y}{x \\log x} = \\frac{1}{x} \\)",
        "\\( \\frac{dy}{dx} + \\frac{y}{x\ \log x} = 1 \\)"
    ],
    answer: "B"
},
{
    question: "\\( \\text{The particular integral of } \\frac{d^2y}{dx^2} - 4y = e^{2x} \\text{ is} \\)",
    options: [
        "\\( \\frac{1}{4} e^{2x} \\)",
        "\\( \\frac{1}{4x}  e^{2x} \\)",
        "\\( \\frac{1}{4} x e^{2x} \\)",
        "0"
    ],
    answer: "C"
}
];




//PHYSICS QUESTIONS


    const physicsQuestions = [
    {
        question: "\\(\\text{N Kg}^{-1} \\text{ is the unit of} \\)",
        options: ["\\( \\text{Velocity} \\)", "\\(\\text{Acceleration} \\)", "\\( \\text{Force} \\)", "\\( \\text{Momentum} \\)"],
        answer: "B"
    },
    {
        question: "A system has basic dimensions as density  D, Velocity  V  and area  A.The dimensional representation of force in this system is",
        options: [
            "\\( A V^2 D \\)",
            "\\( A V D^2 \\)",
            "\\( A^2 V D \\)",
            "\\( A^0 V^2 D \\)"
        ],
        answer: "A"
    },
    {
        question: "If the magnitude of vectors  A, B and  C are 5, 4 and 3 units respectively and A = B + C,  then the angle between vectors A and C is",
        options: [
            "\\( \\cos^{-1}\\left(\\frac{4}{5}\\right) \\)",
            "\\( \\pi \\)",
            "\\( \\cos^{-1}\\left(\\frac{3}{5}\\right) \\)",
            "\\( \\sin^{-1}\\left(\\frac{3}{4}\\right) \\)"
        ],
        answer: "C"
    },
    {
        question: "If the sum of two unit vectors is also a unit vector, then the magnitude of their difference is",
        options: ["1", "\\( \\frac{1}{2} \\)", "\\( \\frac{1}{\\sqrt{2}} \\)", "\\(\\sqrt{3} \\)"],
        answer: "D"
    },
    {
        question: "A particle starting from rest moves in a straight line with uniform acceleration a.  The average velocity of the particle in the first 's' distance is",
        options: ["\\( \\sqrt{\\frac{as}{2}} \\)", "\\( \\sqrt{\\frac{3as}{2}} \\)", "\\(\\sqrt{2as} \\)", "as"],
        answer: "A"
    },
    {
        question: "A projectile is thrown with speed u making an angle &theta; with the horizontal at t=0.It just crosses two points of equal height at time t = 1s and t = 3s respectively. The maximum height attained by the projectile is (take g=10 ms<sup>-2</sup>)",
        options: ["10m", "20m", "15m", "22m"],
        answer: "B"
    },
    {
        question: "A body is falling from height H  and takes time T  seconds to reach the ground. The time taken to cover the first half of the height is",
        options: ["\\( \\frac{T}{\\sqrt{2}} \\)", "\\( \\sqrt{2}T \\)", "\\( \\sqrt{3}T \\)", "\\( \\frac{T}{\\sqrt{3}} \\)"],
        answer: "A"
    },
    {
        question: "A body sliding on ice with a velocity of 8 ms<sup>-1</sup>comes to rest after travelling 40 m. The coefficient of friction between the body and ice is (g=10ms<sup>-2</sup>)",
        options: ["0.02", "0.05", "0.08", "0.2"],
        answer: "C"
    },
    {
        question: "If a body placed on a rough inclined plane of gradient 1 in 4 just begins to slide, then the coefficient of friction between the plane and body is",
        options: ["\\( \\frac{2}{\\sqrt{15}} \\)", "\\( \\frac{1}{\\sqrt{2}} \\)", "\\( \\frac{1}{\\sqrt{5}} \\)", "\\( \\frac{1}{\\sqrt{15}} \\)"],
        answer: "D"
    },
    {
        question: "A cube of 10N weight rests on a rough inclined plane of slope 3 in 5. If the coefficient of friction between the plane and cube is 0.6, then the minimum force required to start the cube moving up the plane is",
        options: ["2N", "6N", "10.8N", "4.5N"],
        answer: "C"
    },
    {
        question: "A pump can take out 7200 kg of water per hour from a 100 m deep well. If the efficiency of the pump is 50%, then the power of the pump is (g = 10 ms<sup>-2</sup>)",
        options: ["2KW", "4KW", "7.2KW", "3.6KW"],
        answer: "B"
    },
    {
        question: "When a force F=i+2j+3k  acts on a body to move it from  r<sub>1</sub> = i+j+k  to  r<sub>2</sub> = i-j+2k,  then the work done by the force is",
        options: ["-3 J", "-1 J", "2 J", "3 J"],
        answer: "B"
    },
    {
        question: "The K.E. of a body moving with a speed of 10 m/s is 30 J. If its speed becomes 30 m/s, then its K.E. will be",
        options: ["10 J", "90 J", "180 J", "270 J"],
        answer: "D"
    },
    {
        question: "The maximum speed of a particle executing SHM is 1 m/s and maximum acceleration is 1.57 m/s<sup>-2</sup>.Its time period is",
        options: ["4 sec", "1.57 sec", "2 sec", "\\( \\frac{1}{1.57} \\)"],
        answer: "A"
    },
    {
        question: "A girl is swinging on a swing in the sitting position. If the girl stands up, the time period of the swing will",
        options: ["Increase", "Decrease", "Remains same", "Becomes erratic"],
        answer: "B"
    },
    {
        question: "A light spring supports a 200 gm weight at its lower end; it oscillates with a period of 1 sec. How much weight must be removed from the lower end to reduce the period to 0.5 sec?",
        options: ["100 gm", "50 gm", "150 gm", "200 gm"],
        answer: "C"
    },
    {
        question: "The velocity of sound in any medium depends upon",
        options: ["Intensity and elasticity", "Amplitude and density", "Elasticity and density", "Amplitude and elasticity"],
        answer: "C"
    },
    {
        question: "The beat frequency produced by the vibrators for x<sub>1</sub> = Asin(320&pi; t) and  x<sub>2</sub> = Asin(326&pi; t) is",
        options: ["6", "4", "2", "3"],
        answer: "D"
    },
    {
        question: "The Boyle's law is stated by  PV = C, C depends on",
        options: ["Nature of gas", "Atomic weight of gas", "Temperature of gas", "Quantity and temperature of gas"],
        answer: "D"
    },
    {
        question: "The equation of state for 5g of oxygen O<sub>2</sub> at pressure P and temperature T, when occupying a volume V, will be (R is universal gas constant)",
        options: ["PV = 5RT", "PV =\\( \\frac{5}{2} RT\\)", "PV = \\(\\frac{5}{16} RT\\)", "PV = \\(\\frac{5}{32} RT\\)"],
        answer: "D"
    },
    {
        question: "The volume of a gas at constant pressure of  10<sup>3</sup> N/m<sup>2</sup> expands by  0.25 m<sup>3</sup>.The work done in this process is",
        options: ["25J", "50J", "250J", "5J"],
        answer: "C"
    },
    {
        question: "\\( \\text{For an adiabatic expansion of a perfect gas the value of } \\frac{\\Delta P}{P} \\text{ is equal to} \\)",
        options: ["\\( \\frac{\\Delta V}{V} \\)", "\\( \\gamma \\frac{\\Delta V}{V} \\)", "-\\( \\gamma \\frac{\\Delta V}{V} \\)", "\\( \\gamma - \\frac{\\Delta V}{V} \\)"],
        answer: "C"
    },
    {
        question: "First law of Thermodynamics is a special case of",
        options: ["Mechanical work", "Ideal gas", "Entropy", "Conservation of energy"],
        answer: "D"
    },
{
    question: "If the critical angle for total internal reflection from a medium to vacuum is 30<sup>0</sup>, the velocity of light in the medium is",
    options: ["\\( 3 \\times 10^8 \\, \\text{m/s} \\)","\\( 1.5 \\times 10^8 \\,\\text{m/s}\\)", "\\( \\sqrt{3} \\times 10^8 \\, \\text{m/s} \\)", "\\( 2 \\times 10^8 \\, \\text{m/s} \\)"
    ],
    answer: "B"
},
{
    question: "Light rays of wavelength 4.36 x 10<sup>-7</sup>m  incident on a metal surface of work function 1.24 eV. The stopping potential required to stop the emission of photoelectrons is",
    options: [ "\\( 1.6 \\, \\text{eV} \\)","\\( 1.24 \\, \\text{eV} \\)", "\\( 3.2 \\, \\text{eV} \\)", "\\( 4.8 \\, \\text{eV} \\)"],
    answer: "A"
}
];



//CHEMISTRY QUESTIONS

        const chemistryQuestions = [
    { question: "According to Bohr's theory of hydrogen atom, the angular momentum of electron in fourth orbit of H-atom is equal to", options: ["h/&pi;", "2h/&pi;", "3h/2&pi;", "4h/&pi;"], answer: "B" },
    { question: "The quantum number which describes the shape of an atomic orbital is", options: ["Azimuthal Quantum Number", "Principal Quantum Number", "Spin Quantum Number", "Magnetic Quantum Number"], answer: "A" },
    { question: "Identify the element in which the ratio of s-electrons to p-electrons is 3:5", options: ["P", "Al", "S", "K"], answer: "C" },
    { question: "The pair of molecules in which the central atom has octet of electrons is", options: ["BeCl<sub>2</sub>,BF<sub>3</sub>", "H<sub>2</sub>O,BeCl<sub>2</sub>", "H<sub>2</sub>O,NH<sub>3</sub>", "NH<sub>3</sub>,BF<sub>3</sub>"], answer: "C" },
    { question: "The electronic configuration of an element M is [Ne]3S<sup>1</sup> and that of Element X is [He]2S<sup>2</sup>2P<sup>5</sup>. The type of bond present between M and X is", options: ["Covalent Bond", "Electrovalent Bond", "Co-ordinate", "Hydrogen Bond"], answer: "B" },
    { question: "The absolute weight of one molecule of water (in g) is (N<sub>A</sub> = 6x10<sup>23</sup>mol<sup>-1</sup>)", options: ["1.5 x 10<sup>-23</sup>", "3.0 x 10<sup>-23</sup>", "4.5 x 10<sup>-23</sup>", "2.0 x 10<sup>-23</sup>"], answer: "B" },
    { question: "The weight of sodium sulphate (molar mass 142 g mol<sup>-1</sup>) required to prepare 500 ml of 0.03M solution is", options: ["2.13 g", "4.26 g", "1.065 g", "3.195 g"], answer: "A" },
    { question: "The number of H<sup>+</sup> ions present in 100ml of 0.05 M H<sub>2</sub>SO<sub>4</sub> solution is (N<sub>A</sub> = 6x10<sup>-23</sup>mol<sup>-1</sup>)", options: ["6.0 X 10<sup>24</sup>", "6.0 X 10<sup>22</sup>", "6.0 X 10<sup>21</sup>", "3.0 X 10<sup>23</sup>"], answer: "C" },
    { question: "The conjugate acid and conjugate base of HCO<sub>3</sub><sup>-</sup> are respectively", options: ["CO<sub>3</sub><sup>2-</sup>,HCO<sub>3</sub><sup>-</sup>", "CO<sub>3</sub><sup>2-</sup>,H<sub>2</sub>CO<sub>3</sub>", "H<sub>2</sub>CO<sub>3</sub>,CO<sub>3</sub><sup>2-</sup>", "HCO<sub>3</sub><sup>-</sup>,H<sub>2</sub>CO<sub>3</sub>"], answer: "C" },
    { question: "The pH of 0.005 M H<sub>2</sub>SO<sub>4</sub> solution will be", options: ["5", "2", "3", "4"], answer: "B" },
    { question: "In an electrochemical cell, the electrons flow from", options: ["Cathode to Anode", "Anode to Cathode", "Anode to Solution", "Solution to Cathode"], answer: "B" },
    { question: "How many faradays are required to reduce 1 mole of MnO<sub>4</sub><sup>-</sup> ions to Mn<sup>2+</sup> ions?", options: ["5", "2", "4", "3"], answer: "A" },
    { question: "At 298K, the emf of the cell, M|M<sup>2+</sup>=(1M)||Cu<sup>2+</sup>(1M)|Cu is 'x'V. If E<sup>0</sup><sub>cu2+|cu</sub> = +0.34v, then E<sup>0</sup><sub>M2+|M</sub>,(in V) is", options: ["(x-0.34)", "(0.34-x)", "(0.34+x)", "(0.34/x)"], answer: "B" },
    { question: "Identify the strongest reducing agent from the following:", options: ["E<sup>0</sup><sub>K+|K</sub>=-2.93 v", "E<sup>0</sup><sub>Al3+|Al</sub> = -1.66 v", "E<sup>0</sup><sub>Zn2+|Zn</sub> = -0.76 v", "E<sup>0</sup><sub>Ag+|Ag</sub> = +0.34 v"], answer: "A" },
    { question: "The formula of Zeolite can be represented as Na<sub>2</sub>Z. The metal atom present in Z is", options: ["Zn", "Ca", "Mg", "Al"], answer: "D" },
    { question: "Which of the following salts causes maximum hardness to water sample, when they are in equal amounts?", options: ["MgSO<sub>4</sub>(Molecular Weight=120u)", "MgCl<sub>2</sub>(Molecular Weight=95u)", "CaCl<sub>2</sub>(Molecular Weight=111u)", "Ca(HCO<sub>3</sub>)<sub>2</sub>(Molecular Weight=162u)"], answer: "B" },
    { question: "Permanent hardness of water cannot be removed by", options: ["Boiling the hard water", "Treatment with washing soda", "Passing through Zeolite", "Passing through ion exchange resins"], answer: "A" },
    { question: "Which of the following statements is not correct about stress cells?", options: ["They are formed between different parts of the same metal", "Stressed part of the metal acts as Cathode", "Stressed part of the metal acts as cathode", "Anodic part undergoes corrosion"], answer: "C" },
    { question: "Tarnishing of silver is due to the formation of", options: ["AgCl", "Ag<sub>2</sub>CO<sub>3</sub>", "Ag<sub>2</sub>O", "Ag<sub>2</sub>S"], answer: "D" },
    { question: "Which of the following is not a natural polymer?", options: ["Wool", "Cellulose", "Starch", "Rayon"], answer: "D" },
    { question: "Neoprene is an example of", options: ["Elastomer", "Thermoplastic polymer", "Thermosetting polymer", "Co-polymer"], answer: "A" },
    { question: "The element that is added to raw rubber vulcanization is", options: ["S", "Se", "C", "B"], answer: "A" },
    { question: "The major components of water gas are", options: ["H<sub>2</sub>,CO", "H<sub>2</sub>,CO<sub>2</sub>", "CO,N<sub>2</sub>", "CO<sub>2</sub>,N<sub>2</sub>"], answer: "A" },
    { question: "Which of the following is not a greenhouse gas?", options: ["O<sub>3</sub>", "CO<sub>2</sub>", "CH<sub>4</sub>", "N<sub>2</sub>"], answer: "D" },
    { question: "The acid that is believed to be mainly responsible for the damage of Taj Mahal is", options: ["H<sub>2</sub>SO<sub>4</sub>", "HF", "H<sub>3</sub>PO<sub>4</sub>", "HCl"], answer: "A" }
];


//COMPUTER QUESTIONS

        const computerQuestions = [
    { question: "The table containing present state of output, next state of the output and the inputs is called", options: ["Truth Table", "State Table", "Excitation Table", "Transition Table"], answer: "C" },
    { question: "A sequential circuit with 10 states will have", options: ["0 Flip-flops", "10 Flip-flops", "4 Flip-flops", "5 Flip-flops"], answer: "C" },
    { question: "A binary number can be multiplied by 2 or divided by 2 with help of", options: ["AND gate", "sequential circuit", "shift register", "any combinational circuit"], answer: "C" },
    { question: "A five bit binary counter uses flip flops with propagation delay time of 10 ns each. The maximum possible time required for change of state will be", options: ["10ns", "0.5ns", "2 ns", "50 ns"], answer: "D" },
    { question: "The Boolean expression (A+c)(AB'+AC)(A'C'+B') can be simplified to", options: ["AB'", "AB+A'C", "A'B+BC", "AB+BC"], answer: "A" },
    { question: "The 2's complement representation of the decimal value -15 is", options: ["01111", "11111", "11110", "10001"], answer: "D" },
    { question: "Let * be defined as x*y=x'+y, let z=x*y. Then the value of z*x is", options: ["x'+y", "x", "0", "1"], answer: "B" },
    { question: "SR latch is made by cross coupling two NAND gates, if S=R=0, then it will result in", options: ["Q=0,Q'=1", "Q=1,Q'=0", "Q=1,Q'=1", "indeterminate state"], answer: "C" },
    { question: "The attributes of good software among the following </br>(a)Development (b)Functionality (c)Maintainability (d)Correctness", options: ["a,b,c only", "b,c,d only", "a,b,d only", "a,c,d only"], answer: "B" },
    { question: "What does SDLC stand for?", options: ["System Design Life Cycle", "Software Design Life Cycle", "Software Development Life Cycle", "System Development Life Cycle"], answer: "C" },
    { question: "__________is a software development life cycle model that is chosen if the development team has less experience on similar projects", options: ["Iterative Enhancement Model", "RAD", "Spiral", "Waterfall"], answer: "C" },
    { question: "Which one of the following is not software process quality?", options: ["Visibility", "Timeliness", "Productivity", "Portability"], answer: "D" },
    { question: "Which of the following document contains the user system requirements?", options: ["SRD", "DDD", "SDD", "SRS"], answer: "D" },
    { question: "Which of the following testing is also known as white-box testing?", options: ["structural testing", "Error guessing technique", "Design based testing", "Integration"], answer: "A" },
    { question: "Cyclomatic complexity is", options: ["White-box testing", "Black box testing", "Grey box testing", "Unit testing"], answer: "A" },
    { question: "The spiral model was originally proposed by", options: ["Barry Boehm", "Pressman", "Royce", "Jalote"], answer: "A" },
    { question: "In computers, subtraction is generally carried out by", options: ["9's complement", "10's complement", "1's complement", "2's complement"], answer: "D" },
    { question: "Computers use addressing mode techniques for </br>(a)giving programming versatility to the user by providing facilities as pointers to memory counters for loop control </br>(b)to reduce no. of bits in the field of instruction </br>(c)specifying rules for modifying or interpreting address field of the instruction", options: ["a only", "a and b only", "a and c only", "a, b and c"], answer: "D" },
    { question: "Cache memory acts between", options: ["CPU and RAM", "RAM and ROM", "CPU and Hard Disk", "RAM and Hard Disk"], answer: "A" },
    { question: "An n-bit microprocessor has", options: ["n-bit program counter", "n-bit address register", "n-bit ALU", "n-bit instruction register"], answer: "D" },
    { question: "In 8086 the overflow flag is set when", options: ["The sum is more than 16 bit", "Signed numbers go out of their range after an arithmetic operation", "Carry & Sign flag are set", "Zero flag is set"], answer: "B" },
    { question: "The part of the computer system that supervises the flow of information between Auxiliary Memory and Main Memory is called", options: ["Processor Management System", "Data Management System", "Address Management System", "Memory Management System"], answer: "D" },
    { question: "Memory unit accessed by content is called", options: ["Read only memory", "Programmable Memory", "Virtual Memory", "Associative Memory"], answer: "D" },
    { question: "A microprocessor retrieves instructions from", options: ["Control memory", "Cache memory", "Main Memory", "Virtual Memory"], answer: "C" },
    { question: "The addressing mode used in an instruction of the form ADD X,Y is", options: ["Immediate", "indirect", "Direct", "Index"], answer: "C" },
    { question: "Which is used to store critical pieces of data during subroutine and interrupts?", options: ["stack", "queue", "accumulator", "data register"], answer: "A" },
    { question: "The size of each segment in 8086 is:", options: ["64 KB", "24 KB", "50 KB", "16 KB"], answer: "A" },
    { question: "A block sequence consisting of a number of Memory words is transferred continuously while a DMA controller is master of Memory Bus. This is", options: ["Polling", "Daisy Chaining", "Burst transfer", "Cycle Steal in"], answer: "C" },
    { question: "Which of the following is not derived data type in c?", options: ["structure", "Pointer", "Enumeration", "Array"], answer: "C" },
    { question: "The declaration shown below refers to </br>struct list </br>{ </br>int info; </br>struct list *prev, *next; </br>};", options: ["Doubly linked list", "Circular linked list with head", "Single linked list", "Circular queue"], answer: "A" },
    { question: "The total number of elements in the array A[3][4][2] is", options: ["9", "24", "12", "36"], answer: "B" },
    { question: "To construct a unique binary search tree, which tree traversals are required?", options: ["only post order", "PostOrder and Inorder", "Preorder and Postorder", "only preorder"], answer: "B" },
    { question: "What is the infix expression for the following prefix expression? </br>-^AB+CD", options: ["(A^B)-(C+D)", "(A^B)+(C-D)", "(A-B)^(C+D)", "(A+B)^(C-D)"], answer: "A" },
    { question: "The number of swapping needed to sort the numbers {7,20,6,9,30,18,4,12} into ascending order using Bubble sort is", options: ["14", "12", "13", "11"], answer: "A" },
    { question: "To implement recursive technique for Quick Sort method, which basic data structure is required?", options: ["Queue", "Tree", "Stack", "Linked List"], answer: "C" },
    { question: "What will be output of the following C code?</br>#include&lt;stdio.h&gt;</br>#include&lt;string.h&gt;</br> void main() { </br>int register a;</br> scanf(%d,&a); </br>printf(%d,a); </br>getch();</br> }", options: ["25", "Address", "0", "Compilation error"], answer: "D" },
    { question: "Which of the following sorting technique is slowest?", options: ["Heap sort", "Merge sort", "Bubble sort", "Shell sort"], answer: "C" },
    { question: "Which of the following sorting algorithms is best if a list is already sorted?", options: ["Heap sort", "Insertion sort", "Quick sort", "Selection sort"], answer: "B" },
    { question: "Error detection at data link level is achieved by", options: ["Bit stuffing", "Cyclic redundancy codes", "Manchester encoding", "Equalization"], answer: "B" },
    { question: "Start and stop bits are used in serial communication for", options: ["Error detection", "Error correction", "Synchronization", "Both error detection and correction"], answer: "C" },
    { question: "A method of communication in which transmission occurs in both the directions, but only one direction at a time is called", options: ["four wires circuit", "half duplex", "simplex", "full duplex"], answer: "B" },
    { question: "A device that can convert digital signals to analog signals is", options: ["Decoder", "Modem", "Encoder", "Router"], answer: "B" },
    { question: "A distributed network configuration in which all data/information pass through a central computer is", options: ["Bus Network", "Star Network", "Ring Network", "Point to Point Network"], answer: "B" },
    { question: "Which layer of OSI reference model is responsible for creating and recognizing frame boundaries?", options: ["Physical Layer", "Data link Layer", "Transport Layer", "Network Layer"], answer: "B" },
    { question: "Which of the following allows devices on one network to communicate with devices on another network?", options: ["Multiplexer", "Gateway", "Switch", "Modem"], answer: "B" },
    { question: "How is a single channel shared by multiple signals in a computer network?", options: ["Multiplexing", "phase modulation", "Decoder", "digital modulation"], answer: "A" },
    { question: "Which of the following devices forwards packets between networks by processing the routing information included in the packet?", options: ["firewall", "bridge", "hub", "router"], answer: "D" },
    { question: "From which layer of the OSI model, does the data link layer take packets from and encapsulate them into frames for transmission?", options: ["Transport Layer", "Application Layer", "Network Layer", "Physical Layer"], answer: "C" },
    { question: "What does each packet contain in a virtual circuit network?", options: ["only source address", "only destination address", "full source and destination address", "a short VC number"], answer: "D" },
    { question: "In Transport layer of TCP/IP model, which address will be used?", options: ["Port addresses", "Specific addresses", "Logical addresses", "Physical addresses"], answer: "A" },
    { question: "Information about process is maintained in a", options: ["Stack", "Translation Lookaside Buffer", "Process Control Block", "Program Control Block"], answer: "C" },
    { question: "Which of the following is crucial time while accessing data on the disk?", options: ["Seek time", "Rotational time", "Transmission time", "Waiting time"], answer: "A" },
    { question: "An optimal scheduling algorithm in terms of minimizing the average waiting time of a given set of processes is", options: ["FCFS scheduling algorithm", "Round robin scheduling algorithm", "Shortest job-first scheduling algorithm", "Priority scheduling algorithm"], answer: "C" },
    { question: "Virtual Memory is implemented using", options: ["Segmentation", "Swapping", "Demand Paging", "Combining all physical memories"], answer: "C" },
    { question: "Inter-process communication can be done through", options: ["Mails", "Message passing", "System calls", "Traps"], answer: "B" },
    { question: "The primary job of the operating system of a computer is to", options: ["Command Resources", "Manage Resources", "Provide Utilities", "Be user friendly"], answer: "B" },
    { question: "Paging", options: ["Solves the memory fragmentation problem", "Allows modular programming", "Allows structured programming", "Avoids deadlock"], answer: "A" },
    { question: "Mutual exclusion", options: ["denotes that one process is in critical region when others are excluded", "Prevents deadlock", "Cannot be implemented using Semaphores", "Is found only in the Windows NT operating system"], answer: "A" },
    { question: "Semaphore can be used for solving", options: ["Wait & signal", "Deadlock", "Synchronization", "Priority"], answer: "C" },
    { question: "What is a shell?", options: ["It is a hardware component", "It is a command interpreter", "It is a part in compiler", "It is a tool in CPU scheduling"], answer: "B" },
    { question: "A page fault occurs", options: ["When the page is not in the memory", "When the page is in the memory", "When the process enters the blocked state", "When the process is in the ready state"], answer: "A" },
    { question: "A process is said to be in ________ state if it was waiting for an event that will never occur", options: ["Safe", "Unsafe", "Starvation", "Deadlock"], answer: "D" },
    { question: "The database environment has all of the following components except", options: ["Users", "separate files", "database", "database administration"], answer: "B" },
    { question: "Normalization of database is used to", options: ["Eliminate redundancy", "Improve security", "Improve efficiency", "Minimize errors"], answer: "A" },
    { question: "E-R modelling technique is a", options: ["Bottom up approach", "Top down approach", "Left Right approach", "Right Left approach"], answer: "B" },
    { question: "Which SQL keyword is used to sort the result?", options: ["ORDER BY", "SORT-ORDER", "SORT", "ORDER"], answer: "A" },
    { question: "Which normal form is adequate for normal relational database design?", options: ["1NF", "5NF", "4NF", "3NF"], answer: "D" },
    { question: "Which of the following is not a characteristic of a relational database model?", options: ["tables", "Treelike structure", "complex Logical relationships", "Records"], answer: "B" },
    { question: "The entity relationship model comes under", options: ["object-based logical model", "record-based logical model", "physical data model", "Grid-based logical model"], answer: "A" },
    { question: "A command that lets you change one or more fields in a record is", options: ["INSERT", "MODIFY", "LOOK UP", "CHANGE"], answer: "B" },
    { question: "A file manipulation command that extracts some of the records from a file is called", options: ["SELECT", "PROJECT", "JOIN", "INDEX"], answer: "A" },
    { question: "The programming language that has the ability to create new data types is called", options: ["Overloaded", "Encapsulated", "Reprehensible", "Extensible"], answer: "D" },
    { question: "Which of the following statements is correct about the formal parameters in C++?", options: ["Parameters with which functions are called", "Parameters which are used in the definition of the function", "Variables other than passed parameters in a function", "Variables that are never used in the function"], answer: "B" },
    { question: "Inheritance in C++ has default access specifier as", options: ["private", "public", "protected", "default"], answer: "A" },
    { question: "What function initializes variables in a class?", options: ["Constructor", "Destructor", "static", "friend"], answer: "A" },
    { question: "Which of the following statement is correct about Virtual Inheritance?", options: ["It is a technique to ensure that a private member of a base class can be accessed", "It is a technique to optimize multiple inheritances", "It is a technique to avoid multiple inheritances of the classes", "It is a C++ technique to avoid multiple copies of the base class into the derived or child classes"], answer: "D" },
    { question: "Which of the following is not true about polymorphism?", options: ["Helps in redefining the same functionality", "Increases overhead of function definition always", "It is a feature of OOP", "Ease in readability of program"], answer: "B" },
    { question: "The object of the class can be created in any function when a constructor is defined with this access specifier", options: ["Any access specifier", "Private", "Public", "Protected"], answer: "C" },
    { question: "Which feature of OOP reduces the use of nested classes?", options: ["Inheritance", "Binding", "Abstraction", "Encapsulation"], answer: "A" },
    { question: "Which feature of OOP is exhibited by function overriding?", options: ["Polymorphism", "Encapsulation", "Abstraction", "Inheritance"], answer: "A" },
    { question: "How to access the private member function of a class?", options: ["Using class address", "Using object of class", "Using object pointer", "Using address of member function"], answer: "D" },
    { question: "What is the environment variable that contains a list of directories where Java looks for classes referenced in a program?", options: ["Path class", "Search path", "Path dir", "Class path"], answer: "D" },
    { question: "The finally block is executed in Java", options: ["Only when a checked exception is thrown", "Only when an unchecked exception is thrown", "Only when an exception is thrown", "Irrespective of whether an exception is thrown or not"], answer: "D" },
    { question: "The number of bytes needed to store a number which is a data type double is", options: ["8", "4", "2", "1"], answer: "A" },
    { question: "Which component is used to compile, debug, and execute the Java programs?", options: ["JRE", "JIT", "JDK", "JVM"], answer: "C" },
    { question: "What is Truncation in Java?", options: ["Floating-point value assigned to Floating type", "Floating-point value assigned to integer type", "Integer value assigned to floating type", "Integer value assigned to integer type"], answer: "B" },
    { question: "Which of these are selection statements in Java?", options: ["break", "continue", "for()", "if()"], answer: "D" },
    { question: "Which of these packages contains the exception Stack Overflow in Java?", options: ["java.io", "java.system", "java.lang", "java.util"], answer: "C" },
    { question: "Which of the following option leads to the portability and security of Java?", options: ["Bytecode is executed by JVM", "The applet makes the Java code secure and portable", "Use of exception handling", "Dynamic binding between objects"], answer: "A" },
    { question: "What is the return type of the hashCode() method in the Object class?", options: ["Object", "int", "long", "void"], answer: "B" },
    { question: "Evaluate the following Java expression, if x=3, y=5, and z=10: ++z + y - y + z + x++", options: ["24", "23", "20", "25"], answer: "D" },
    { question: "Which of the following is not an HTML tag?", options: ["&lt;select&gt;", "&lt;input&gt;", "&lt;textarea&gt;", "&lt;list&gt;"], answer: "D" },
    { question: "What does HTML stand for?", options: ["Hyper Text Markup Language", "High Text Markup Language", "Hyper Tabular Markup Language", "High Tabular Markup Language"], answer: "A" },
    { question: "Which of the following is NOT true regarding JavaScript?", options: ["JavaScript is a loosely typed language", "JavaScript cannot be used to develop games", "JavaScript is not an object-based language", "JavaScript can not run in standalone mode"], answer: "B" },
    { question: "Which HTML tag is used to create a hyperlink?", options: ["&lt;link&gt;", "&lt;href&gt;", "&lt;a&gt;", "&lt;hyperlink&gt;"], answer: "C" },
    { question: "Which method of the Component class is used to set the position and size of a component in JSP?", options: ["setSize()", "setBounds()", "setPosition()", "setPositionSize()"], answer: "B" },
    { question: "Which of the following programming languages is commonly used for server-side scripting in web development?", options: ["HTML", "CSS", "JAVASCRIPT", "PHP"], answer: "D" },
    { question: "Which of the following is a popular front-end framework for building user interfaces in JavaScript?", options: ["Django", "Angular", "Flask", "Node.js"], answer: "B" },
    { question: "What is the purpose of JavaScript in web development?", options: ["To define the structure and content of web pages", "To add interactivity and behavior to web pages", "To style and format web pages", "To manage server-side data and databases"], answer: "B" }

];


        let subjectScores = {
            maths: 0,
            physics: 0,
            chemistry: 0,
            computer: 0
        };

const subjectTimes = {
    maths: 50,   
    physics: 20, 
    chemistry: 15, 
    computer: 75 
};


        let currentQuestions = [];
        let currentSubject = '';
        let currentQuestionIndex = 0;
        let answeredQuestions = [];
        let markedQuestions = [];
        let timer;
        let timeLeft = 0; 

        function loadSubjectQuestions(subject) {
            // Reset everything when a new subject is loaded
            currentSubject = subject;
            currentQuestionIndex = 0;
            answeredQuestions = [];
            markedQuestions = [];
            timeLeft = subjectTimes[subject] * 60;// Reset timer
            clearInterval(timer);
            startTimer();

            // Load the appropriate set of questions based on the selected subject
            if (subject === 'maths') {
                currentQuestions = mathsQuestions;
            } else if (subject === 'physics') {
                currentQuestions = physicsQuestions;
            } else if (subject === 'chemistry') {
                currentQuestions = chemistryQuestions;
            } else if (subject === 'computer') {
                currentQuestions = computerQuestions;
            }
            
            // Hide score display and reset buttons
            document.getElementById('score').style.display = 'none';



            // Display the first question
            displayQuestion();
            updateQuestionNumbers();
            MathJax.typeset();
        }


function startTimer() {
    timer = setInterval(function () {
        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;
        if (seconds < 10) seconds = '0' + seconds;
        document.getElementById('dtime').textContent = `${minutes}:${seconds}`;
        
        if (timeLeft <= 0) {
            clearInterval(timer);
            alert(`${currentSubject.charAt(0).toUpperCase() + currentSubject.slice(1)} time is up!`);
            document.getElementById(`${currentSubject}-score`).style.display = 'block';
            document.getElementById(`${currentSubject}-score-value`).textContent = subjectScores[currentSubject];
            
            loadNextSubject();
        }
        
        timeLeft--;
    }, 1000);
}


  function displayQuestion() {
        const question = currentQuestions[currentQuestionIndex];
        document.getElementById('question').innerHTML = question.question;
        let optionsHtml = '';
        question.options.forEach((option, index) => {
            optionsHtml += `
                <input type="radio" name="option" id="option${index}" value="${String.fromCharCode(65 + index)}"
                    ${answeredQuestions.includes(currentQuestionIndex) && document.querySelector(`input[name="option"]:checked`)?.value === String.fromCharCode(65 + index) ? 'checked' : ''}>
                <label for="option${index}">${option}</label><br>
            `;
        });
        document.getElementById('options').innerHTML = optionsHtml;
        document.getElementById('question-number').textContent = `Question ${currentQuestionIndex + 1}`;
MathJax.typeset();
    }



function nextQuestion() {
    const selectedOption = document.querySelector('input[name="option"]:checked');
    
    // If no option is selected, ask the user to select an option
    if (!selectedOption) {
        alert("Please select an option.");
        return;
    }
    
    const correctAnswer = currentQuestions[currentQuestionIndex].answer;
    
    // If the selected option is correct, increase the score
    if (selectedOption.value === correctAnswer) {
        subjectScores[currentSubject]++;
    }

    // Mark the current question as answered
    answeredQuestions.push(currentQuestionIndex);

    const questionNumberElement = document.getElementById(`question-number-${currentQuestionIndex}`);
    
    // If the question was marked for review, it will remain red, but it will also turn blue once answered
    if (markedQuestions.includes(currentQuestionIndex)) {
        questionNumberElement.classList.remove('marked');  // Remove red for marked
        questionNumberElement.classList.add('selected');  // Add blue for answered
    } else {
        questionNumberElement.classList.add('selected');  // Blue for answered
    }

    currentQuestionIndex++;
    
    if (currentQuestionIndex < currentQuestions.length) {
        displayQuestion();
        updateQuestionNumbers();
           MathJax.typeset();

    } else {
        loadNextSubject();
    }
}

function markForReview() {
    // Add the current question to the markedQuestions list if it's not already in it
    if (!markedQuestions.includes(currentQuestionIndex)) {
        markedQuestions.push(currentQuestionIndex);
    }

    const questionNumberElement = document.getElementById(`question-number-${currentQuestionIndex}`);
    
    // Mark the question as red (marked)
    questionNumberElement.classList.add('marked');  // Red for marked
    questionNumberElement.classList.remove('selected');  // Remove blue if present

    currentQuestionIndex++;
    
    if (currentQuestionIndex < currentQuestions.length) {
        displayQuestion();
        updateQuestionNumbers();
    } else {
        loadNextSubject();
    }
}






function updateQuestionNumbers() {
    const questionNumbersContainer = document.getElementById('question-numbers');
    questionNumbersContainer.innerHTML = '';
    
    currentQuestions.forEach((question, index) => {
        const questionNumber = document.createElement('span');
        questionNumber.textContent = index + 1;
        questionNumber.id = `question-number-${index}`;
        questionNumber.classList.add('question-number');
        
        // Add 'selected' class if the question is answered.
        if (answeredQuestions.includes(index)) {
            questionNumber.classList.add('selected');
        }
        
        // Add 'marked' class if the question is marked for review.
        if (markedQuestions.includes(index) && !answeredQuestions.includes(index)) {
            questionNumber.classList.add('marked');  // Red for marked
        }
        
        questionNumber.onclick = function () {
            currentQuestionIndex = index;
            displayQuestion();
        };
        
        questionNumbersContainer.appendChild(questionNumber);
    });
}





function markForReview() {
    // Add the current question to the markedQuestions list if it's not already in it
    if (!markedQuestions.includes(currentQuestionIndex)) {
        markedQuestions.push(currentQuestionIndex);
    }

    const questionNumberElement = document.getElementById(`question-number-${currentQuestionIndex}`);
    
    // Mark the question as red (marked) and blue (answered) if already answered
    if (answeredQuestions.includes(currentQuestionIndex)) {
        questionNumberElement.classList.add('marked');  // Keep red for marked
        questionNumberElement.classList.remove('selected');  // Remove blue for now
    } else {
        questionNumberElement.classList.add('marked');  // Red for marked
    }

   currentQuestionIndex++;
    
    if (currentQuestionIndex < currentQuestions.length) {
        displayQuestion();
        updateQuestionNumbers();
    } else {
        loadNextSubject();
    }
}





 function loadNextSubject() {
        const subjects = ['maths', 'physics', 'chemistry', 'computer'];
        const currentSubjectIndex = subjects.indexOf(currentSubject);

        // If not the last subject, load the next one
        if (currentSubjectIndex < subjects.length - 1) {
            loadSubjectQuestions(subjects[currentSubjectIndex + 1]);
        } else {
            endQuiz();
        }
    }

function back(){
window.location="choice.php"
}


       function endQuiz() {
    document.getElementById('quiz-container').style.display = 'none'; 
    document.getElementById('question-numbers').style.display = 'none';
    document.getElementById('score').style.display = 'block';
    document.getElementById('btc').style.display = 'block';
    clearInterval(timer);

    // Display the scores for all subjects
    document.getElementById('maths-score').style.display = 'block';
    document.getElementById('physics-score').style.display = 'block';
    document.getElementById('chemistry-score').style.display = 'block';
    document.getElementById('computer-score').style.display = 'block';

    // Update the scores
    document.getElementById('maths-score-value').textContent = subjectScores.maths;
    document.getElementById('physics-score-value').textContent = subjectScores.physics;
    document.getElementById('chemistry-score-value').textContent = subjectScores.chemistry;
    document.getElementById('computer-score-value').textContent = subjectScores.computer;
}