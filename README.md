##### Este é o Readme do projeto _em inglês_, caso prefira acompanhar o Readme em Português-BR, [clique aqui](README-PT.md)

# LeetCode Challenge

<p align="center">
  <img src="Media/Image/leetcode-challenge.png" alt="LeetCode Logo" width="400">
</p>

<p align="center">
  <a href="https://github.com/caio-andres/leetcode-challenge/graphs/contributors">
    <img src="https://img.shields.io/github/contributors/caio-andres/leetcode-challenge?color=ffa116&logo=github&style=flat-square" alt="GitHub Contributors">
  </a>
  <a href="https://github.com/caio-andres/leetcode-challenge/stargazers">
    <img src="https://img.shields.io/github/stars/caio-andres/leetcode-challenge?color=ffa116&logo=github&style=flat-square" alt="GitHub Stars">
  </a>
  <a href="https://github.com/caio-andres/leetcode-challenge/forks">
    <img src="https://img.shields.io/github/forks/caio-andres/leetcode-challenge?color=ffa116&logo=github&style=flat-square" alt="GitHub Forks">
  </a>
  <a href="https://discord.gg/t86nFuCrbj">
    <img src="https://custom-icon-badges.demolab.com/discord/1112920281367973900?color=ffa116&logo=discord&label=Discord&logoColor=white&style=flat-square" alt="Discord">
  </a>
</p>

## About LeetCode

[LeetCode](https://leetcode.com) is a premier platform for practicing coding problems and preparing for technical interviews. It offers a vast collection of problems that help developers enhance their algorithmic skills.

## Project Overview

This repository is a collaborative effort by [@matheusaudibert](https://github.com/matheusaudibert), [@caio-andres](https://github.com/caio-andres) and [@enzowxl](https://github.com/enzowxl). Our mission is to solve one LeetCode problem each day, documenting our solutions and explanations to foster learning and growth.

## Getting Started

To contribute to or use this repository, you'll need to set up your environment first. The project uses Python to fetch and process LeetCode problems.

### Prerequisites

- Python 3.6 or higher
- pip (Python package installer)

### Installation

1. Clone the repository

   ```bash
   git clone https://github.com/caio-andres/leetcode-challenge.git
   cd leetcode-challenge
   ```

2. Create a virtual environment (optional but recommended)

   ```bash
    python -m venv .venv

    # On Windows
    .venv\Scripts\activate

    # On macOS/Linux
    source .venv/bin/activate
   ```

3. Install the required dependencies

   ```bash
   pip install -r requirements.txt
   ```

### Using the Problem Generator Script

The repository includes a script to automatically fetch problems from LeetCode and create the directory structure:

1. Run the script

   ```bash
   python get_problem.py
   ```

2. Enter the LeetCode problem ID when prompted

   ```
   Digite o ID do problema: 1
   ```

3. The script will:
   - Fetch the problem details from LeetCode
   - Create the necessary directory structure
   - Generate description files in both English and Portuguese
   - Create a template solution file in Python


**Observation: Check if problem generate is the same what you wish to commit to this repo.
If not, check title problem in here <a href="https://leetcode.com/api/problems/all/">LINK</a> and catch it in "question id".**
### Directory Structure

After running the script, a new problem directory will be created following the repository structure pattern:

```
problems/
└── solutions/
    └── 0001-two-sum/
        ├── en/
        │   ├── description.md
        │   └── explanation.md
        ├── pt/
        │   ├── descricao.md
        │   └── explicacao.md
        └── solution.py
```

Now you're ready to solve LeetCode problems and contribute to the project!

## Summary

Here you will find the summary of all the problems we have solved. Each problem is documented with its description, solution, and explanation.

To view the full summary of all exercises, simply access the [`summary.md`](problems/summary.md).

If you wish to filter problems by difficulty, you can check the following files:

- **Easy Problems**: [`easy.md`](problems/easy.md)
- **Medium Problems**: [`medium.md`](problems/medium.md)
- **Hard Problems**: [`hard.md`](problems/hard.md)

## Repository Structure

Each problem is organized in its own directory, containing:

- **description.md**: The problem statement.
- **explanation.md**: A detailed explanation of the approach and logic used.
- **solution.py**: The implemented solution in Python.
- **solution.xx**: The implemented solution in any other language.

## Multilingual Support

To cater to a broader audience, we provide documentation in both English and Portuguese. The structure for each problem is as follows:

```
├── problems
│   └── solutions
│       ├── 001-two-sum
│       │   ├── en/
│       │   │   ├── description.md
│       │   │   └── explanation.md
│       │   ├── pt/
│       │   │   ├── descricao.md
│       │   │   └── explicacao.md
│       │   ├── solution.py
│       │   └── solution.xx
```

This format ensures consistency and makes it easy to navigate through the problems we've tackled in both languages.

## Our LeetCode Statistics

We utilize the [LeetCode-Stats-Card](https://github.com/JacobLinCool/LeetCode-Stats-Card) todisplay our current statistics. Here are our individual stats:

[@matheusaudibert](https://github.com/matheusaudibert)

![LeetCode Stats](https://leetcard.jacoblin.cool/audibert?theme=dark&font=Baloo%202)

[@caio-andres](https://github.com/caio-andres)

![LeetCode Stats](https://leetcard.jacoblin.cool/caio-andres?theme=dark&font=Baloo%202)

[@enzowxl](https://github.com/enzowxl)

![LeetCode Stats](https://leetcard.jacoblin.cool/enzowxl?theme=dark&font=Baloo%202)

## Current Progress



- **Total Problems Solved**: 24
- **Last Problem made**: [112. Path Sum](problems/solutions/0112-path-sum/solution.py)


We are committed to maintaining this streak and continuously expanding our repository with new challenges and solutions.

## Badges

LeetCode offers a variety of **badges** to recognize achievements and milestones throughout your problem-solving journey. These badges appear on user profiles and represent accomplishments like solving problems across different difficulties, maintaining daily streaks, and more.

To see the full list of available badges and learn how to earn each one, check out: [`badges.md`](badges/badges.md)

## Contributions

Contributions are welcome! If you'd like to add solutions in another langagues, improve existing ones, or provide explanations, feel free to fork the repository and submit a pull request.

## Contributors

[Pedro Ancelotti](https://github.com/Ancelotti-Dev)
[Vítor Santos](https://github.com/euvitorti)

## Contact

For any questions or suggestions, please reach out to us by accessing our discord: [Servidor do Programadores](https://discord.gg/t86nFuCrbj).

Or feel free to connect with us on **LinkedIn**: [Matheus Audibert](https://www.linkedin.com/in/matheusaudibert), [Caio André](https://www.linkedin.com/in/caio-porto-oliveira), [Enzo Almedida](https://www.linkedin.com/in/enzodev/).

_To show support give this repo a ⭐ star! It means a lot, thank you :)_

##### Este é o Readme do projeto _em inglês_, caso prefira acompanhar o Readme em Português-BR, [clique aqui](README-PT.md)
